USE [ASSIGNMENT2_DS]
GO
/****** Object:  StoredProcedure [dbo].[InsertCV]    Script Date: 12/8/2019 11:01:28 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[InsertCV]
@userId int,
@email VARCHAR(255),
@career_obj VARCHAR(255),
@exp_field VARCHAR(255),
@time_accum int
as
begin
	declare @cvId as int
	if @email not like '%_@_%._%' raiserror ('Invalid email',20,1) with log
	if @time_accum < 0 raiserror ('Invalid accumulated time',20,1) with log
	set @cvId = (select max(ID) from CV ) + 1
	if (@cvId is null)  set @cvId = 1
	begin try
		insert into CV values(@cvId, @userId, @email, @career_obj, @exp_field, @time_accum)
	end try
	begin catch
		print 'Error'
	end catch
end;
GO
