CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_mastercategory_summary`(IN s_ym VARCHAR(10))
BEGIN
	SET @spend_ym = CONCAT(s_ym,'%');
	SET @sql_row = 
		'(SELECT DATE_FORMAT(spend_date, ''%Y-%m'') AS spend_year_month, 
			 SUBSTR(spend_category, 1, 1) AS master_category,
			 SUM(spend_amount) AS sum_spend_amount
		FROM wspending 
		WHERE spend_date like ? 
		GROUP BY spend_year_month, master_category
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

	SET @final_sql = CONCAT('SELECT spend_year_month as `Year Month`, ', 
                        @sql_columns, ',', @total_column,
                        ' AS Total FROM ' , 
                        @sql_row, ' GROUP BY `Year Month`');
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @spend_ym;
	DEALLOCATE PREPARE stmt;
END