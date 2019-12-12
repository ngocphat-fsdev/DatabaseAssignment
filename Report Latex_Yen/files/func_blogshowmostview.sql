create function blog_show_most_view ()
returns int
as
begin
	declare @blog_id as int;
	declare @max_view as int;
	set @max_view = (select max(viewnum) from blog);
	set @blog_id = (select blog.id from blog where blog.viewnum = @max_view)
return @blog_id
end

