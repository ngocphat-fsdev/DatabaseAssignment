CREATE TRIGGER count_blog 
ON dbo.BLOG
AFTER INSERT
AS
BEGIN
	Declare @id_user as int
	Set @id_user = (select id_user from inserted )
	UPDATE NORMAL_USER
	Set BLOGUPLOADED = BLOGUPLOADED + 1
	Where ID = @id_user
END
	

