CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_trans_spend_data`(IN s_account VARCHAR(3), IN s_user VARCHAR(50))
BEGIN
	DECLARE done INT DEFAULT FALSE;
	DECLARE t_spend_date DATE;
    DECLARE t_spend_amount DECIMAL(13,2);
    DECLARE t_spend_category VARCHAR(3);
    DECLARE t_spend_description VARCHAR(80);
    DECLARE v_spend_status INT DEFAULT 0;
    
    DECLARE tmp_cur CURSOR FOR SELECT spend_date, spend_amount, spend_category, spend_description FROM tmp_spend;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    
    OPEN tmp_cur;
    
    read_loop: LOOP
		FETCH tmp_cur INTO t_spend_date, t_spend_amount, t_spend_category, t_spend_description;
        IF done THEN LEAVE read_loop;
        END IF;
        
        IF (SUBSTR(t_spend_category,1,1) = 'G' )THEN SET v_spend_status = 9;
        ELSE SET v_spend_status = 0;
        END IF;
        
        INSERT INTO wspending 
		(spend_date,spend_amount,spend_account,spend_category,spend_description,spend_user, spend_status)
		VALUES
        (t_spend_date,t_spend_amount,s_account,t_spend_category,t_spend_description, s_user, v_spend_status);
        
	END LOOP;
    
    CLOSE tmp_cur;
    
END