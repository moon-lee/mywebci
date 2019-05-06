/* 
	MASTER CATEGORY
*/
SELECT SUBSTR(a.master_category,1,1) as master_category, b.cat_name as master_name, sum_spend_amount
FROM (SELECT CONCAT(SUBSTR(spend_category, 1, 1), '00') AS master_category,
			SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE YEAR(spend_date) = 2019 
      AND MONTH(spend_date) = 2
	  GROUP BY master_category
      ORDER BY master_category) a 
LEFT JOIN wcategory b ON master_category = b.cat_code;
/* 
	SUB CATEGORY
*/
SELECT a.sub_category, b.cat_name as sub_name, sum_spend_amount
FROM (SELECT spend_category AS sub_category,
			SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE YEAR(spend_date) = 2019 
      AND MONTH(spend_date) = 2
      AND spend_category LIKE 'A%'
	  GROUP BY sub_category
      ORDER BY sub_category) a 
LEFT JOIN wcategory b ON sub_category = b.cat_code;

/*
*/
SELECT DISTINCT DATE_FORMAT(spend_date, '%Y') AS spend_year
FROM wspending;


SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS spend_year_month
        FROM wspending ORDER BY spend_year_month DESC;

SELECT ''as category_code, 'Main' as category_name
UNION
SELECT SUBSTR(cat_code,1,1) as category_code, cat_name as category_name FROM wcategory
        WHERE cat_code LIKE '%00'
        

