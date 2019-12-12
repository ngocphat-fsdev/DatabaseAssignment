
create procedure blog_show_blogID
@blog_id int
as
begin
	select blog.*,post.title
	from blog,post
	where @blog_id = blog.id
	and blog.id = post.id
end;

