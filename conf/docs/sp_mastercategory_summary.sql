CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_mastercategory_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @spend_ym = CONCAT(c_date,'%');
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
    
	SET @sql_first_row = 
		'(SELECT DATE_FORMAT(spend_date, ''%Y-%m'') AS row_title, 
			 SUBSTR(spend_category, 1, 1) AS master_category,
			 SUM(spend_amount) AS sum_spend_amount
		FROM wspending 
		WHERE spend_date like ? 
		GROUP BY row_title, master_category
		ORDER BY master_category) a';
    
	SET @sql_second_row = 
		'(SELECT ? AS row_title, SUBSTR(spend_category, 1, 1) AS master_category,
			 SUM(spend_amount) AS sum_spend_amount
		FROM wspending
        WHERE spend_date between ? and ?
		GROUP BY master_category
		ORDER BY master_category) a';

	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0) AS `',
                cat_name,
                '`'))
	INTO @sql_columns FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @first_row_sql = CONCAT('SELECT row_title, ',@sql_columns, ',', @total_column,
							' AS Total FROM ' , @sql_first_row ,' GROUP BY row_title');

	SET @second_row_sql = CONCAT('SELECT row_title, ',@sql_columns, ',', @total_column,
							' AS Total FROM ' , @sql_second_row ,' GROUP BY row_title');
                            
	SET @final_sql = CONCAT('(',@first_row_sql,') union (',@second_row_sql,')');

                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @spend_ym, @finance_year, @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END