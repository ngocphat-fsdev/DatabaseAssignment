create procedure get_more_liked_blog_desc	--1/ loc blog co so luong like lon hon so like nhap vao, sap xep tang dan
@likenum int
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and BLOG.LIKENUM >= @likenum
	order by LIKENUM DESC;
end;

create procedure get_more_liked_blog_asc	--2/ loc blog co so luong like lon hon so like nhap vao, sap xep giam dan
@likenum int
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and BLOG.LIKENUM >= @likenum
end;

create procedure get_more_disliked_blog_desc	--3/ loc blog co so luong dislike lon hon so dislike nhap vao, sap xep giam dan
@dislikenum int
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and BLOG.DISLIKENUM >= @dislikenum
	order by DISLIKENUM DESC;
end;

create procedure get_more_disliked_blog_asc		--4/ loc blog co so luong dislike lon hon so dislike nhap vao, sap xep tang dan
@dislikenum int
as
begin
	select UPLOADER_NAME,TITLE 
	from POST, BLOG
	where POST.ID = BLOG.ID and BLOG.DISLIKENUM >= @dislikenum
end;

create procedure get_most_liked_blog	--5/ blog nhieu like nhat
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and LIKENUM = (select max(LIKENUM) from BLOG);
end;

create procedure get_most_disliked_blog		--6/ blog nhieu dislike nhat
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and DISLIKENUM = (select max(DISLIKENUM) from BLOG);
end;

create procedure get_most_viewed_blog		--7/ blog nhieu view nhat
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and VIEWNUM = (select max(VIEWNUM) from BLOG);
end;

create procedure get_job_by_location		--8/ hien thi cong viec theo noi lam viec
@location varchar(255)
as
begin
	select NAME,POSTION,WORK_PLACE
	from COMPANY,RECRUIT_POST,EMPLOYEE
	where RECRUIT_POST.WORK_PLACE = @location and RECRUIT_POST.ID_UPLOADER = EMPLOYEE.ID and EMPLOYEE.ID_COMPANY = COMPANY.ID;
end;

create procedure get_company_has_job		--9/ hien thi cong ty co cong viec can tim
@job varchar(255)
as
begin
	select NAME,POSTION
	from COMPANY,RECRUIT_POST,EMPLOYEE
	where RECRUIT_POST.POSTION like '%'+@job+'%' and RECRUIT_POST.ID_UPLOADER = EMPLOYEE.ID and EMPLOYEE.ID_COMPANY = COMPANY.ID;
end;

create procedure get_company_job		--10/ hien thi danh sach cong viec cua 1 cong ty
@companyName varchar(255)
as
begin
	select NAME,POSTION
	from COMPANY,RECRUIT_POST,EMPLOYEE
	where RECRUIT_POST.ID_UPLOADER = EMPLOYEE.ID and EMPLOYEE.ID_COMPANY = COMPANY.ID and COMPANY.NAME = @companyName;
end;


create procedure get_newest_blog		--11/ hien thi blog moi nhat
as
begin
	select UPLOADER_NAME,TITLE 
	from POST,BLOG
	where POST.ID = BLOG.ID and DATEDIFF(day,POST.UPLOAD_TIME,GETDATE()) = (select MIN(DATEDIFF(day,POST.UPLOAD_TIME,GETDATE())) from POST,BLOG where POST.ID = BLOG.ID);
end;

create procedure get_newest_recruit_post		--12/ hien thi tin tuyen dung moi nhat
as
begin
	select UPLOADER_NAME,TITLE 
	from POST join RECRUIT_POST on POST.ID = RECRUIT_POST.ID
	where DATEDIFF(day,POST.UPLOAD_TIME,GETDATE()) = (select MIN(DATEDIFF(day,POST.UPLOAD_TIME,GETDATE())) from POST,RECRUIT_POST where POST.ID = RECRUIT_POST.ID );
end;

create procedure sort_blog_old_to_new		--13/ hien thi blog cu den moi
as
begin
	select UPLOADER_NAME,TITLE 
	from POST join BLOG on POST.ID = BLOG.ID
	order by POST.UPLOAD_TIME asc;
end;

create procedure sort_blog_new_to_old		--14/ hien thi blog moi den cu
as
begin
	select UPLOADER_NAME,TITLE 
	from POST join BLOG on POST.ID = BLOG.ID
	order by POST.UPLOAD_TIME desc;
end;

create procedure sort_recruit_post_old_to_new		--15/ hien thi tin tuyen dung cu den moi
as
begin
	select UPLOADER_NAME,TITLE 
	from POST join RECRUIT_POST on POST.ID = RECRUIT_POST.ID
	order by POST.UPLOAD_TIME asc;
end;

create procedure sort_recruit_post_new_to_old		--16/ hien thi tin tuyen dung moi den cu
as
begin
	select UPLOADER_NAME,TITLE 
	from POST join RECRUIT_POST on POST.ID = RECRUIT_POST.ID
	order by POST.UPLOAD_TIME desc;
end;

CREATE PROCEDURE findLocationOfWork(@Location AS VARCHAR(255))
AS
BEGIN
	SELECT POSTION 
	FROM RECRUIT_POSITION 
	INNER JOIN RPOST_POSITION ON RPOST_POSITION.ID_POSITION = RECRUIT_POSITION.ID
	INNER JOIN RECRUIT_POST ON RECRUIT_POST.ID = RPOST_POSITION.ID_RPOST
	WHERE RECRUIT_POST.WORK_PLACE = @Location
END;

CREATE PROCEDURE findCompanyOfPosition(@Position AS VARCHAR(255))
AS
BEGIN
	SELECT NAME 
	FROM COMPANY 
	INNER JOIN EMPLOYEE ON EMPLOYEE.ID_COMPANY = COMPANY.ID
	INNER JOIN RECRUIT_POST_UPLOADER ON EMPLOYEE.ID = RECRUIT_POST_UPLOADER.ID
	INNER JOIN RECRUIT_POST ON RECRUIT_POST_UPLOADER.ID =RECRUIT_POST.ID_UPLOADER
	INNER JOIN RPOST_POSITION ON RECRUIT_POST.ID = RPOST_POSITION.ID_RPOST
	INNER JOIN RECRUIT_POSITION ON RPOST_POSITION.ID_POSITION = RECRUIT_POSITION.ID
	WHERE RECRUIT_POSITION.POSTION = @Position
	ORDER BY NAME
END;

CREATE PROCEDURE findCompaniesDetails(@id_account AS int)
AS
BEGIN
	SELECT *
	FROM COMPANY
	WHERE Id_Account = @id_account
END

CREATE PROCEDURE findCompanyDetails(@id AS int)
AS
BEGIN
	SELECT *
	FROM COMPANY
	WHERE ID = @id
END

CREATE PROCEDURE findRecruitPostOfCompany(@id AS int)
AS
BEGIN
	DECLARE @ID_EMPLOYEE AS INT
	SET @ID_EMPLOYEE = (SELECT ID FROM EMPLOYEE WHERE EMPLOYEE.ID_COMPANY = @id);
	SELECT *
	FROM RECRUIT_POST
	WHERE
	ID_UPLOADER = @ID_EMPLOYEE  
	ORDER BY ID;
END

CREATE PROCEDURE searchCandidate
@CandidateName VARCHAR(255)
AS
BEGIN
	SELECT NORMAL_USER.FULLNAME, NORMAL_USER.BIRTHDATE, NORMAL_USER.SEX,
			CV.EMAIL, CV.CARREER_OBJ, CV.EXP_FIELD
	FROM NORMAL_USER
	INNER JOIN CV ON CV.ID_USER = NORMAL_USER.ID
	INNER JOIN SUBMIT_CV ON CV.ID = SUBMIT_CV.ID_CV
	INNER JOIN RECRUIT_POST ON RECRUIT_POST.ID = SUBMIT_CV.ID_RPOST
	INNER JOIN RECRUIT_POST_UPLOADER ON RECRUIT_POST.ID_UPLOADER = RECRUIT_POST_UPLOADER.ID
	INNER JOIN EMPLOYEE ON RECRUIT_POST_UPLOADER.ID = EMPLOYEE.ID
	WHERE NORMAL_USER.FULLNAME = @CandidateName
	ORDER BY NORMAL_USER.FULLNAME
END;

CREATE PROCEDURE deleteCandidate
@CvID INT
AS
BEGIN
	DELETE 
	FROM CV 
	WHERE CV.ID = @CvID
END;

CREATE PROCEDURE seeCandidate
AS 
BEGIN
	SELECT NORMAL_USER.FULLNAME, NORMAL_USER.BIRTHDATE, NORMAL_USER.SEX,
			CV.EMAIL, CV.CARREER_OBJ, CV.EXP_FIELD, CV.ID
	FROM NORMAL_USER
	INNER JOIN CV ON CV.ID_USER = NORMAL_USER.ID
	INNER JOIN SUBMIT_CV ON CV.ID = SUBMIT_CV.ID_CV
	INNER JOIN RECRUIT_POST ON RECRUIT_POST.ID = SUBMIT_CV.ID_RPOST
	INNER JOIN RECRUIT_POST_UPLOADER ON RECRUIT_POST.ID_UPLOADER = RECRUIT_POST_UPLOADER.ID
	INNER JOIN EMPLOYEE ON RECRUIT_POST_UPLOADER.ID = EMPLOYEE.ID
	ORDER BY NORMAL_USER.FULLNAME
END;


CREATE PROCEDURE CheckCompany(@id_account INT)
AS
BEGIN
	SELECT * FROM COMPANY WHERE ID_Account = @id_account;
END

CREATE PROCEDURE getAllPosts
@UploaderID INT
AS
BEGIN
	SELECT POST.ID, UPLOADER_NAME, TITLE, UPLOAD_TIME, WORK_PLACE, POSTION, REQUIREMENT, WORK_TIME,
	QUANTITY, CV_DEADLINE, SALARY, POST.ACC_ID
	FROM POST, RECRUIT_POST 
	WHERE POST.ACC_ID = @UploaderID AND POST.ID = RECRUIT_POST.ID
	ORDER BY POST.ACC_ID
END

CREATE PROCEDURE getPost
@ID_POST INT
AS
BEGIN
	SELECT POST.ID, ACC_ID, UPLOADER_NAME, TITLE, UPLOAD_TIME, WORK_PLACE, POSTION, REQUIREMENT, WORK_TIME,
	QUANTITY, CV_DEADLINE, SALARY
	FROM POST, RECRUIT_POST 
	WHERE POST.ID = @ID_POST AND POST.ID = RECRUIT_POST.ID
END

create function F_RPOST_INFO(@compId int)
returns table
as
return (
	select POST.TITLE, POST.UPLOAD_TIME, RECRUIT_POST.POSTION, RECRUIT_POST.QUANTITY, RECRUIT_POST.SALARY, RECRUIT_POST.WORK_PLACE, RECRUIT_POST.REQUIREMENT, POST.ID
	from COMPANY,EMPLOYEE,RECRUIT_POST,POST
	where COMPANY.ID = @compId and EMPLOYEE.ID_COMPANY = @compId and RECRUIT_POST.ID_UPLOADER = EMPLOYEE.ID and RECRUIT_POST.ID = POST.ID
);

create function F_get_compId(@empId int)
returns table
as
return (
	select EMPLOYEE.ID_COMPANY, COMPANY.NAME, COMPANY.LOGO from EMPLOYEE, COMPANY where EMPLOYEE.ID = @empId
);

ALTER FUNCTION SearchLocation (@keyword VARCHAR(255),
@location VARCHAR(255))
RETURNS TABLE
AS
RETURN(
	SELECT * FROM COMPANY 
	WHERE (NAME LIKE @keyword) AND (ADDRESS LIKE @location)
);


câu 1
create procedure pack_insert
@price int,
@expire int,
@maxpost int
as
begin
	if @price < 0 raiserror ('Price must be positive number',20,1) with log
	if @expire < 0 raiserror ('Expiration must be positive number',20,1) with log
	if @maxpost < 0 raiserror ('Max number of post must be positive number',20,1) with log
	
	if exists (select * from PACK where PRICE = @price and EXPIRATION = @expire and MAX_POST = @maxpost)
	raiserror ('This pack already exists',20,1) with log
	declare @packId as int
	set @packId = (select max(ID) from PACK) + 1
	begin try
		insert into PACK values(@packId,@price,@expire,@maxpost);
	end try
	begin catch
		print 'Error'
	end catch
end;


create procedure purchase_insert
@packId int,
@company varchar(255),
@payMethod varchar(255)
as
begin
	declare @compId as int
	set @compId = (select ID from COMPANY where NAME = @company)
	begin try
		insert into PURCHASE values(@packId,@compId,@payMethod,GETDATE(),1)
	end try
	begin catch
		update PURCHASE set TIMES = TIMES + 1, PURCHASED_DATE = GETDATE(), PAY_METHOD = @payMethod where ID_PACK = @packId and ID_COMP = @compId
	end catch
end;


câu 2

create trigger purchase_trigger
on PURCHASE
after insert
as
begin
	declare @packId as int
	set @packId = (select ID_PACK from inserted)
	declare @postNum as int
	set @postNum = (select MAX_POST from PACK where ID = @packId)
	update COMPANY set REMAINING = REMAINING + @postNum where ID = (select ID_COMP from inserted)
end;


create trigger pack_update_trigger
on PACK
after update
as
begin
	declare @newMaxPost as int
	declare @oldMaxPost as int
	declare @postNum as int
	declare @packId as int
	set @packId = (select ID from inserted)
	
	set @newMaxPost = (select MAX_POST from inserted)
	set @oldMaxPost = (select MAX_POST from deleted)
	if @newMaxPost > @oldMaxPost
	begin
		set @postNum = @newMaxPost - @oldMaxPost
	end
	else set @postNum = 0

	declare @oldExpiration as int
	set @oldExpiration = (select EXPIRATION from deleted)

	update COMPANY set REMAINING = REMAINING + @postNUm
	where ID in (select ID_COMP from PURCHASE where ID_PACK = @packId and DATEADD(month,@oldExpiration,PURCHASED_DATE) >= GETDATE())
end;


câu 3


create procedure get_company_buy_pack
@packId int
as
begin
	select NAME, PURCHASE.ID_PACK from COMPANY,PURCHASE where PURCHASE.ID_PACK = @packId and ID_COMP = COMPANY.ID order by NAME 
end;


create procedure get_pack_bought_by_more_than_N_company
@compNum as int
as
begin
	select PACK.ID,PACK.PRICE,PACK.EXPIRATION,PACK.MAX_POST,count(*) as NUMCOMPANY
	from PACK,PURCHASE
	where PACK.ID = PURCHASE.ID_PACK
	group by PACK.ID,PACK.PRICE,PACK.EXPIRATION,PACK.MAX_POST
	having count(*) >= @compNum
	order by PACK.ID
end;



câu 4

create function khoi1(@compId int)
returns table
as 
return (
	select COMPANY.NAME, PACK.ID as PACK,PURCHASE.TIMES, PURCHASE.TIMES*PACK.PRICE as COST
	from COMPANY,PACK,PURCHASE
	where PURCHASE.ID_COMP = @compId and COMPANY.ID = @compId and PACK.ID = PURCHASE.ID_PACK
);



create function khoi2(@pdate date)
returns int 
as
begin
	if @pdate >= GETDATE()
	begin 
		return -1
	end
	declare @result int
	set @result =  (
			select count(*) as PURCHASE_NUM
			from PURCHASE
			where PURCHASE.PURCHASED_DATE = @pdate
	) 
	return @result
end;
