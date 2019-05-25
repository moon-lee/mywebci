CREATE DEFINER=`wom`@`localhost` FUNCTION `current_financial_year`(fromto INT, financeyear DATE) RETURNS varchar(100) CHARSET utf8mb4
BEGIN
SET @rst = NULL;
IF fromto = 1 THEN 
	/*
		To get from financial year
    */
	IF MONTH(financeyear) < 7 THEN
		SELECT CONCAT(YEAR(financeyear)-1,'-07-01') INTO @rst ;
    ELSE
		SELECT CONCAT(YEAR(financeyear),'-07-01') INTO @rst ;
    END IF;
ELSE
	/*
		To get to financial year
    */
	IF MONTH(financeyear) < 7 THEN
		SELECT CONCAT(YEAR(financeyear),'-06-30') INTO @rst ;
    ELSE
		SELECT CONCAT(YEAR(financeyear)-1,'-06-30') INTO @rst ;
    END IF;
END IF;
RETURN @rst;
END