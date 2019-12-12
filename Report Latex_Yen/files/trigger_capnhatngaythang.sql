
create trigger cap_nhat
on post
after insert
as
begin
update post
set upload_time=SYSDATETIME() where post.id =(select id  from inserted)
end
