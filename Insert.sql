USE ASSIGNMENT2_DATABASE
GO
ALTER PROCEDURE InsertUser
(  
@full_name VARCHAR(255),  
@username VARCHAR(255),  
@password VARCHAR(255),  
@sex CHAR(1),  
@birthdate DATE,
@level INT
)  
AS  
BEGIN  
	IF (len(@username) < 5)
		BEGIN
		PRINT ('LENGTH OF USERNAME MUST MORE THAN 5 CHARACTERS.');
		RETURN 0;
		END
	IF @username in (SELECT USERNAME FROM ACCOUNT)
		BEGIN
		PRINT ('USERNAME IS EXISTED.');
		RETURN 0;
		END
	declare @AccountID as int
	set @AccountID = (select max(ID) from ACCOUNT) + 1
	SET DATEFORMAT mdy;
	BEGIN Try
		INSERT INTO ACCOUNT (ID, USERNAME, PASSWORD, LEVEL) VALUES (@AccountID, @username, @password, @level);
		INSERT INTO NORMAL_USER(ID, FULLNAME, BIRTHDATE, SEX) VALUES (@AccountID, @full_name, @birthdate, @sex);
		RETURN 1;
	END Try
	BEGIN Catch
		PRINT('ERROR');
		RETURN 0;
	END Catch
END  

CREATE PROCEDURE InsertAccount (
@username VARCHAR(255),
@password VARCHAR(255),
@level INT
)
AS
BEGIN
	IF (len(@username) < 5)
		BEGIN
		PRINT ('LENGTH OF USERNAME MUST MORE THAN 5 CHARACTERS.');
		RETURN -1;
		END
	IF @username in (SELECT USERNAME FROM ACCOUNT)
		BEGIN
		PRINT ('USERNAME IS EXISTED.');
		RETURN -2;
		END
	declare @AccountID as int
	set @AccountID = (select max(ID) from ACCOUNT ) + 1
	BEGIN Try
		INSERT INTO ACCOUNT (ID, USERNAME, PASSWORD, LEVEL) VALUES (@AccountID, @username, @password, @level);
		RETURN 0;
	END Try
	BEGIN Catch
		RETURN -3;
	END Catch
END