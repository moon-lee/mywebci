/* 
	MASTER CATEGORY
*/
SELECT a.*, b.cat_name as master_name
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
SELECT a.*, b.cat_name as sub_name
FROM (SELECT spend_category AS sub_category,
			SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE YEAR(spend_date) = 2019 
      AND MONTH(spend_date) = 2
      AND SUBSTR(spend_category,1,1) LIKE 'A%'
	  GROUP BY sub_category
      ORDER BY sub_category) a 
LEFT JOIN wcategory b ON sub_category = b.cat_code;

/*
*/
SELECT DISTINCT DATE_FORMAT(spend_date, '%Y') AS spend_year
FROM wspending;


SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS spend_year_month
FROM wspending;
