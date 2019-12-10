USE ASSIGNMENT2_DATABASE
GO
-- Insert Normal User
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
	if (@AccountID is null)  set @AccountID = 1
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

-- Insert Account
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
	if (@AccountID is null)  set @AccountID = 1
	BEGIN Try
		INSERT INTO ACCOUNT (ID, USERNAME, PASSWORD, LEVEL) VALUES (@AccountID, @username, @password, @level);
		RETURN 0;
	END Try
	BEGIN Catch
		RETURN -3;
	END Catch
END

-- Insert Employee
CREATE PROCEDURE InsertEmployee
@accountId INT,
@fullname varchar(50),
@companyId INT,
@isUploader bit
as
begin
	if not exists (select ID from ACCOUNT where ID = @accountId) 
	begin
		RAISERROR('Account not exists',20,1) with log
	end
	if not exists (select ID from COMPANY where ID = @companyId) 
	begin
		RAISERROR('Company not exists',20,1) with log
	end
	if @fullname LIKE '%[0-9]%'
	begin
		RAISERROR('Name not suitable',20,1) with log
	end
	begin try
		insert into EMPLOYEE (ID,FULLNAME,ID_COMPANY) values (@accountId, @fullname, @companyId)
		if @isUploader = 0 insert into EMPLOYER values (@accountId)
		else insert into RECRUIT_POST_UPLOADER values (@accountId)
	end try
	begin catch
		print 'Please CREATE a new account for this employee first'
	end catch
end;

--Insert CV
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

--Insert Recruit Post
create procedure InsertRecruitPost
@work_place VARCHAR(255),
@postion VARCHAR(255),
@requirement VARCHAR(255),
@work_time VARCHAR(255),
@salary int,
@quantity int,
@cv_deadline DATETIME,
@id_uploader int
as
begin
	set nocount on;
	declare @recpostId as int
	set @recpostId = ( select max(ID) from POST) + 1
	if (@recpostId is null)  set @recpostId = 1
	if @salary < 0 raiserror ('Salary false',20,1) with log
	declare @uploader as int
	set @uploader = (select ID from RECRUIT_POST_UPLOADER where ID = @id_uploader)
	if @uploader is null raiserror('Uploader not exists',20,1) with log
	if @work_time not like '%_/_%/_%' raiserror ('Invalid time',20,1) with log
	if @quantity < 0 raiserror ('Quantity false',20,1) with log
	begin try
		insert into RECRUIT_POST(ID,WORK_PLACE,POSTION,REQUIREMENT,WORK_TIME,SALARY,QUANTITY,CV_DEADLINE,ID_UPLOADER) values (@recpostId,@work_place,@postion,@requirement,@work_time,@salary,@quantity,@cv_deadline,@uploader)
	end try
	begin catch
		print 'Error'
	end catch
end;

create procedure blog_insert
@content VARCHAR(255),
@pic VARCHAR(255),
@id_user int
as
begin
	set nocount on;
	declare @blogID as int,
		@likenum int = 0,
 		@dislikenum int = 0,
		@viewnum int = 0;
	set @blogID = ( select max(ID) from post) + 1
	if (@blogID is null)  set @blogID = 1
	if not exists (select ID from NORMAL_USER where ID = @id_user) 
	begin
		RAISERROR('User not exists',20,1) with log
	end
	begin try
		insert into BLOG(ID,CONTENT,PIC,ID_USER,LIKENUM, DISLIKENUM, VIEWNUM) values (@blogID,@content,@pic,@id_user,@likenum,@dislikenum,@viewnum)
	end try
	begin catch
		print 'Error'
	end catch
end;

CREATE PROCEDURE InsertCompany (
@address VARCHAR(255),
@website VARCHAR(255),
@name VARCHAR(255),
@business_field VARCHAR(255),
@business_type VARCHAR(255),
@logo VARCHAR(255),
@phone int,
@id_account INT
)
AS
BEGIN
	declare @id as int
	set @id = (select max(ID) from COMPANY ) + 1
	if (@id is null) set @id = 1
	declare @exprired_date as DATE
	SET @exprired_date = GETDATE();
	BEGIN Try
		INSERT INTO COMPANY (ID, ADDRESS, WEBSITE, NAME, BUSINESS_FIELD, BUSINESS_TYPE, EXPIRED_DATE, REMAINING, LOGO, PHONENUMBER, ID_Account) 
		VALUES (@id, @address, @website, @name, @business_field, @business_type, @exprired_date, 0, @logo, @phone, @id_account);
		RETURN 1;
	END Try
	BEGIN Catch
		RETURN 0;
	END Catch
END

INSERT INTO PACK (ID, PRICE, EXPIRATION, MAX_POST) VALUES (1, 10, 2, 3)
INSERT INTO PACK (ID, PRICE, EXPIRATION, MAX_POST) VALUES (2, 20, 4, 5)
INSERT INTO PACK (ID, PRICE, EXPIRATION, MAX_POST) VALUES (3, 40, 8, 7)
INSERT INTO PACK (ID, PRICE, EXPIRATION, MAX_POST) VALUES (4, 100, 12, 20)



EXEC InsertCompany 'HCM City','hcmut.edu.vn', 'HCMUT', 'HCM City', 'CSE', 'assets/img/logo-default.png', '09209399', 4