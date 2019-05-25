CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_subcategory_summary`(IN s_ym VARCHAR(10), IN s_code VARCHAR(3))
BEGIN
DECLARE EXIT HANDLER FOR 1064 
BEGIN
	SELECT '';
END;

SET @spend_ym = CONCAT(s_ym,'%');
SET @spend_category = CONCAT(s_code,'%');
SET @category_name = NULL;
SELECT cat_name INTO @category_name from wcategory where cat_code =  CONCAT(s_code, '00');
SET @sql_row = 
'(SELECT ? as `Sub Category`, spend_category, SUM(spend_amount) AS sum_spend_amount
  FROM wspending 
  WHERE spend_date like ?  AND spend_category like ?
  GROUP BY spend_category  ORDER BY spend_category) a';

SET @sql_columns = NULL;
SELECT 
    GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                a.spend_category,
                '\' THEN sum_spend_amount END),0) AS `',
                b.cat_name,
                '`'))
INTO @sql_columns FROM
wspending a
left join wcategory b on (a.spend_category = b.cat_code)
WHERE
    a.spend_date LIKE @spend_ym
        AND a.spend_category LIKE @spend_category;

SET @total_column = NULL;
SELECT 
    GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,
                '\' THEN sum_spend_amount END),0)')
        SEPARATOR '+')
INTO @total_column FROM
    wspending
WHERE
    spend_date LIKE @spend_ym
        AND spend_category LIKE @spend_category;


SET @final_sql = CONCAT('SELECT `Sub Category`, ',@sql_columns,',', @total_column,' AS Total FROM ',@sql_row ,' GROUP BY `Sub Category`');
PREPARE stmt FROM @final_sql ;
EXECUTE stmt USING @category_name, @spend_ym, @spend_category;
DEALLOCATE PREPARE stmt;

END