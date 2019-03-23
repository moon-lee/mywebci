SELECT CONVERT(SUBSTR(cat_code,2,2), SIGNED)FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'A%';

SELECT LPAD(IFNULL(MAX(SUBSTR(cat_code,2,2)) + 1,1),2,'0') FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'A%';

SELECT * FROM wcategory
WHERE cat_code =  'A%';


SELECT CONCAT(SUBSTR(cat_code,1,1),'00') as master_category FROM wcategory;





SELECT IFNULL(MAX(SUBSTR(cat_code,2,2)) + 1, 1)
FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'B%';


create user 'wom'@'localhost' identified by 'password';
flush privileges;
grant all on myweb.* to 'wom'@'localhost';

select sum(pay_holiday_leave) from wpayment
where pay_date < 20181123;

select * from wpayment
where pay_date < 20181123;

select 113.73 - 7.6 + 2.92 ;

select 174.8/23;

-- Get Main Category Code and Name
SELECT SUBSTR(cat_code,1,1) as cat_code, cat_name FROM wcategory
WHERE cat_code LIKE '%00';

-- Get Sub Category Code and Name
SELECT * FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'B%';

select 	s.spend_date as spend_date, 
		s.spend_amount as spend_amount,
		s.spend_account as spend_account, 
		s.spend_description as description,  
		c.cat_name as category
from wspending as s
left join wcategory as c 
on s.spend_category = c.cat_code;


SELECT s.spend_date as spend_date, s.spend_description as spend_description, s.spend_account as spend_account, c.cat_name as spend_category, s.spend_amount as spend_amount 
FROM `wspending` as `s` LEFT JOIN `wcategory` as `c` ON `s`.`spend_category` = `c`.`cat_code` 
WHERE (
 `spend_account` LIKE '%w%' ESCAPE '!' 
OR `spend_category` LIKE '%w%' ESCAPE '!' 
) 
ORDER BY `spend_date` ASC LIMIT 10;


SELECT 
	a.spend_date as spend_date,
    a.spend_amount as spend_amount,
    a.spend_account as spend_account,
    a.spend_description as spend_description,
	concat(c.cat_name, "\t  --  ", a.spend_category) as spend_category  
FROM 
	(SELECT 
			`s`.`spend_date` AS `spend_date`,
			`s`.`spend_amount` AS `spend_amount`,
			(CASE `s`.`spend_account`
				WHEN 1 THEN 'Bank Saving'
				WHEN 2 THEN 'Credit Card'
				WHEN 3 THEN 'Cash'
				ELSE ''
			END) AS `spend_account`,
			`s`.`spend_description` AS `spend_description`,
			CONCAT(SUBSTR(cat_code,1,1),'00') as master_category,
				   `c`.`cat_name` AS `spend_category`
		FROM
			(`wspending` `s`
			LEFT JOIN `wcategory` `c` ON ((`s`.`spend_category` = `c`.`cat_code`)))) as a
LEFT JOIN wcategory c ON a.master_category = c.cat_code;


