CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_year_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
	SET @sql_row = 
		'(SELECT ? AS `Financial Year`, SUBSTR(spend_category, 1, 1) AS master_category,
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
                SUBSTR(cat_code,1,1),
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

	SET @final_sql = CONCAT('SELECT `Financial Year` , ',
							@sql_columns, ',', @total_column,
							' AS Total FROM ' , @sql_row, ' GROUP BY `Financial Year`');
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_year, @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END