CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_income_summary`(IN s_ym VARCHAR(10))
BEGIN
SET @spend_ym = CONCAT(s_ym,'%');
SET @sql_row = NULL;
SET @sql_row = 
'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
  FROM wspending 
  WHERE spend_date like ?  AND spend_status != 0
  GROUP BY spend_category  ORDER BY spend_category) a';

SET @total_column = NULL;
SELECT 
	GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,'\' THEN sum_spend_amount END),0)') SEPARATOR '+')
INTO @total_column FROM
   wspending
WHERE spend_date LIKE @spend_ym
AND spend_status != 0;

SET @sql_columns = NULL;
SELECT 

      GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,'\' THEN sum_spend_amount END),0) AS `',
                spend_category, '`'))

INTO @sql_columns FROM   wspending
WHERE spend_date LIKE @spend_ym
AND spend_status != 0;

SET @final_sql = CONCAT('SELECT ', 
                        @sql_columns, ',', @total_column,
                        ' AS Total FROM ' , 
                        @sql_row);

PREPARE stmt FROM @final_sql ;
EXECUTE stmt USING @spend_ym;
DEALLOCATE PREPARE stmt;
END