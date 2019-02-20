SELECT CONVERT(SUBSTR(cat_code,2,2), SIGNED)FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'A%';

SELECT LPAD(IFNULL(MAX(SUBSTR(cat_code,2,2)) + 1,1),2,'0') FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'A%';

SELECT * FROM wcategory
WHERE cat_code LIKE 'B%';


SELECT * FROM wcategory
WHERE NOT SUBSTR(cat_code,2,2) IN ('00','99')
AND cat_code LIKE 'B%';


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

select 113.73 - 7.6 + 2.92 + 2.92;

select 174.8/23;