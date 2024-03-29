USE [ASSIGNMENT2_DS]
GO
/****** Object:  StoredProcedure [dbo].[InsertEmployee]    Script Date: 12/8/2019 11:01:28 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[InsertEmployee]
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
GO
