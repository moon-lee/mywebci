CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_trends_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
	SET @sql_row = 
		'(SELECT  "" as Trends, DATE_FORMAT(spend_date, ''%Y-%m'') AS s_ym, 
			   SUM(spend_amount) AS sum_amount
		FROM wspending 
		WHERE spend_date between ? and ? 
        and spend_category NOT IN(SELECT cat_code FROM wcategory WHERE cat_status = 0)
		GROUP BY s_ym) a ';

	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN s_ym =\'',
					b.finance_month,'\' THEN sum_amount END),0) AS `', b.finance_month, '`'))
	INTO @sql_columns 
	FROM
    
    (SELECT DATE_FORMAT(@finance_from_year + interval a.a month, '%Y-%m') as finance_month
	 FROM (	select 0 as a 
			union all select 1 union all select 2 union all select 3 union all select 4 
			union all select 5 union all select 6 union all select 7 union all select 8 
			union all select 9 union all select 10 union all select 11 ) as a) as b;

    /*
    (SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS finance_month
		FROM wspending) b;
	*/

	SET @final_sql = CONCAT('SELECT `Trends`, ', @sql_columns, ' FROM ', @sql_row,' GROUP BY `Trends`');
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END