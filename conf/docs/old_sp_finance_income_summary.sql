CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_income_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
	SET @sql_row = 
	'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE spend_date between ? and ?  AND spend_status != 0
	  GROUP BY spend_category  ORDER BY spend_category) a';

	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
					spend_category,'\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM
	   wspending
	WHERE spend_date BETWEEN @finance_from_year AND @finance_to_year
	AND spend_status != 0;

	SET @sql_columns = NULL;
	SELECT 

		  GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
					spend_category,'\' THEN sum_spend_amount END),0) AS `',
					spend_category, '`'))

	INTO @sql_columns FROM   wspending
	WHERE spend_date BETWEEN @finance_from_year AND @finance_to_year
	AND spend_status != 0;

	SET @final_sql = CONCAT('SELECT ', 
							@sql_columns, ',', @total_column,
							' AS Total FROM ' , 
							@sql_row);

	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;
END