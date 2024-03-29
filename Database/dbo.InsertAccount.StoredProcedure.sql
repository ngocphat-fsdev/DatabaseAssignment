USE [ASSIGNMENT2_DS]
GO
/****** Object:  StoredProcedure [dbo].[InsertAccount]    Script Date: 12/8/2019 11:01:28 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[InsertAccount] (
@username VARCHAR(255),
@password VARCHAR(255),
@level INT
)
AS
BEGIN
	IF (len(@username) < 5)
		BEGIN
		PRINT ('LENGTH OF USERNAME MUST MORE THAN 5 CHARACTERS.');
		RETURN -1;
		END
	IF @username in (SELECT USERNAME FROM ACCOUNT)
		BEGIN
		PRINT ('USERNAME IS EXISTED.');
		RETURN -2;
		END
	declare @AccountID as int
	set @AccountID = (select max(ID) from ACCOUNT ) + 1
	BEGIN Try
		INSERT INTO ACCOUNT (ID, USERNAME, PASSWORD, LEVEL) VALUES (@AccountID, @username, @password, @level);
		RETURN 0;
	END Try
	BEGIN Catch
		RETURN -3;
	END Catch
END
GO
