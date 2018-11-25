SELECT CONVERT(SUBSTR(testcol,2,2), SIGNED)FROM test
WHERE NOT SUBSTR(testcol,2,2) IN ('00','99')
AND testcol LIKE 'A%';

SELECT LPAD(MAX(SUBSTR(testcol,2,2)) + 1,2,'0') FROM test
WHERE NOT SUBSTR(testcol,2,2) IN ('00','99')
AND testcol LIKE 'B%';

SELECT * FROM TEST
WHERE testcol LIKE 'B%';