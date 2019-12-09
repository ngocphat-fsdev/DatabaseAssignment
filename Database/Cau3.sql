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
@CandidateName VARCHAR(255)
AS
BEGIN
	DELETE cvitae
	FROM CV cvitae
	INNER JOIN NORMAL_USER ON cvitae.ID_USER = NORMAL_USER.ID
	INNER JOIN SUBMIT_CV ON cvitae.ID = SUBMIT_CV.ID_CV
	INNER JOIN RECRUIT_POST ON RECRUIT_POST.ID = SUBMIT_CV.ID_RPOST
	INNER JOIN RECRUIT_POST_UPLOADER ON RECRUIT_POST.ID_UPLOADER = RECRUIT_POST_UPLOADER.ID
	INNER JOIN EMPLOYEE ON RECRUIT_POST_UPLOADER.ID = EMPLOYEE.ID
	WHERE NORMAL_USER.FULLNAME = @CandidateName
END;

CREATE PROCEDURE seeCandidate
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
	ORDER BY NORMAL_USER.FULLNAME
END;
