USE feedbacks;

# Creating trigger to auto insert send date
DELIMITER //
CREATE TRIGGER before_insert_on_feedback
BEFORE INSERT ON feedback
FOR EACH ROW
BEGIN
    IF new.send_date IS NULL THEN
        SET new.send_date = NOW();
    END IF;
END //
DELIMITER ;
