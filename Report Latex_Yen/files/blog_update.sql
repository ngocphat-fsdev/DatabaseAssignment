create procedure blog_update
@blog_id int,
@title as VARCHAR(255),
@id_user int,
@content VARCHAR(255),
@pic VARCHAR(255),
@viewnum int,
@likenum int,
@dislikenum int
as
begin
	declare @old_id_user as int;
	set @old_id_user = (select id_user from blog where id = @blog_id);
	if (@id_User != @old_id_user ) 
		raiserror('Not the same user id',20,1) with log; 
	begin try
		update blog
	set content = @content, pic = @pic, viewnum = @viewnum, likenum = @likenum, dislikenum = @dislikenum
		where id = @blog_id;
		update post
		set upload_time = getdate(), title = @title
		where id = @blog_id	
	end try
	begin catch
		print 'Error'
	end catch
end;
