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
