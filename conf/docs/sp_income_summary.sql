CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_income_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @spend_ym = CONCAT(c_date,'%');
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
	SET @sql_first_row = 
	'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE spend_date like ?  AND spend_status != 0
	  GROUP BY spend_category  ORDER BY spend_category) a';    
      
	SET @sql_second_row = 
	'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE spend_date between ? and ?  AND spend_status != 0
	  GROUP BY spend_category  ORDER BY spend_category) a';

    
	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN spend_category =\'',
                cat_code,'\' THEN sum_spend_amount END),0) AS `', cat_name, '`'))
	INTO @sql_columns FROM wcategory
	WHERE SUBSTR(cat_code,1,1) = 'G' 
	AND SUBSTR(cat_code,2,2) NOT IN('00', '99'); 
    
	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                cat_code,
                '\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM wcategory
	WHERE SUBSTR(cat_code,1,1) = 'G' 
	AND SUBSTR(cat_code,2,2) NOT IN('00', '99'); 

	SET @first_row_sql = CONCAT('SELECT ', @sql_columns, ',', @total_column,
							' AS Total FROM ' ,@sql_first_row);

	SET @second_row_sql = CONCAT('SELECT ', @sql_columns, ',', @total_column,
							' AS Total FROM ' ,@sql_second_row);
                            
	SET @final_sql = CONCAT('(',@first_row_sql,') union (',@second_row_sql,')');

	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @spend_ym, @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END