USE ASSIGNMENT2_DATABASE
GO
CREATE PROCEDURE InsertUser
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

CREATE PROCEDURE InsertEmployee
@acc varchar(50),
@fullname varchar(50),
@company varchar(50),
@isUploader bit
as
begin
	declare @accId as int
	set @accId = (select ID from ACCOUNT where USERNAME = @acc)
	if @accID is null RAISERROR('Account not exists',20,1) with log
	if not exists (select NAME from COMPANY where NAME = @company) 
	begin
		RAISERROR('Company not exists',20,1) with log
	end
	if @fullname LIKE '%[0-9]%'
	begin
		RAISERROR('Name not suitable',20,1) with log
	end
	declare @companyId as int
	set @companyId = (select ID from COMPANY where NAME = @company)
	begin try
		insert into EMPLOYEE(ID,FULLNAME,ID_COMPANY) values (@accId,@fullname,@companyId)
		if @isUploader = 0 insert into EMPLOYER values (@accId)
		else insert into RECRUIT_POST_UPLOADER values (@accId)
	end try
	begin catch
		print 'Please CREATE a new account for this employee first'
	end catch
end;

CREATE PROCEDURE InsertCV
@userId int,
@email VARCHAR(255),
@career_obj VARCHAR(255),
@exp_field VARCHAR(255),
@time_accum int
as
begin
	declare @cvId as int
	if @email not like '%_@_%._%' raiserror ('Invalid email',20,1) with log
	if @time_accum < 0 raiserror ('Invalid accumulated time',20,1) with log
	set @cvId = (select max(ID) from CV ) + 1
	if (@cvId is null)  set @cvId = 1
	begin try
		insert into CV values(@cvId, @userId, @email, @career_obj, @exp_field, @time_accum)
	end try
	begin catch
		print 'Error'
	end catch
end;