--Delete Recruit Post thi delete sang bang POST
CREATE TRIGGER RecruitPost_DeleteTrigger
ON RECRUIT_POST
AFTER DELETE
AS
BEGIN
	DELETE FROM POST
	WHERE ID = (SELECT ID FROM deleted)
END

--Insert Recruit Post thi giam so bai con lai
CREATE TRIGGER RecruitPost_InsertTrigger
ON RECRUIT_POST
AFTER INSERT
AS
BEGIN
	UPDATE COMPANY
	SET REMAINING = REMAINING - 1
	FROM
		inserted, RECRUIT_POST, POST, ACCOUNT, EMPLOYEE, COMPANY
	WHERE 
		RECRUIT_POST.ID = inserted.ID
		AND RECRUIT_POST.ID = POST.ID
		AND POST.ACC_ID = ACCOUNT.ID
		AND ACCOUNT.ID = EMPLOYEE.ID
		AND EMPLOYEE.ID_COMPANY = COMPANY.ID
END


--check phone number of employee
create trigger CheckPhoneNum on EMPLOYEE_PHONE
after insert,update
as
begin
	declare @insertedPhone as varchar(10)
	set @insertedPhone = (select PHONE_NUM from inserted)
	declare @existedPhone as varchar(10)
	set @existedPhone = (select count(*) from EMPLOYEE_PHONE where PHONE_NUM = @insertedPhone);
	if(@existedPhone > 1) 
	begin
		print 'This phone number is already used by someone else'
		rollback
	end
end;


--check user info
CREATE trigger check_normal_user_info on NORMAL_USER
after insert, update
as
begin
	declare @fullname as varchar(255)
	set @fullname = (select FULLNAME from inserted)
	if @fullname like '%[0-9]%' 
	begin
		print 'Invalid name'
		DELETE FROM ACCOUNT WHERE ID = (SELECT ID FROM inserted);
		rollback
	end
	declare @bdate as date
	set @bdate = (select BIRTHDATE from inserted)
	if DATEDIFF(day,@bdate,getdate()) < 0
	begin
		print 'Invalid birthdate'
		DELETE FROM ACCOUNT WHERE ID = (SELECT ID FROM inserted);
		rollback
	end
end;

-- Dem so bai blog cua normal_user viet
CREATE TRIGGER count_blog 
ON BLOG
AFTER INSERT
AS
BEGIN
	Declare @id_user as int
	Set @id_user = (select ID_USER from inserted)
	UPDATE NORMAL_USER
	Set BLOGUPLOADED = BLOGUPLOADED + 1
	Where ID = @id_user
END

-- Extend Date of Pack
CREATE TRIGGER dbo.extend_date ON PURCHASE
AFTER INSERT
AS
BEGIN
	UPDATE COMPANY
	SET REMAINING = REMAINING + 
			(SELECT EXPIRATION FROM PACK 
			INNER JOIN PURCHASE ON PURCHASE.ID_PACK = PACK.ID
			INNER JOIN COMPANY ON COMPANY.ID = PURCHASE.ID_COMP
			WHERE PURCHASE.ID_COMP = COMPANY.ID AND PURCHASE.ID_PACK = PACK.ID),
		MAXPOST = MAXPOST + 
			(SELECT MAX_POST FROM PACK 
			INNER JOIN PURCHASE ON PURCHASE.ID_PACK = PACK.ID
			INNER JOIN COMPANY ON COMPANY.ID = PURCHASE.ID_COMP
			WHERE PURCHASE.ID_COMP = COMPANY.ID AND PURCHASE.ID_PACK = PACK.ID)		
END

CREATE TRIGGER Check_Company_Info ON COMPANY
AFTER INSERT, UPDATE
AS
BEGIN
	declare @name as varchar(255)
	set @name = (select NAME from inserted)
	if @name like '%[0-9]%' 
		BEGIN
			print 'wrong format name'
			rollback
		END
	declare @phone as int
	set @phone = (select PHONENUMBER from inserted)
	if @phone not like %[0-9]%
		BEGIN
		print 'wrong int format'
		rollback
		END 
END