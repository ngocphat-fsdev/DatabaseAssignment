USE [ASSIGNMENT2_DS]
GO
/****** Object:  Table [dbo].[EMPLOYER]    Script Date: 12/8/2019 11:01:27 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[EMPLOYER](
	[ID] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[EMPLOYER]  WITH CHECK ADD  CONSTRAINT [FK_EMPLOYEE_EMPLOYER] FOREIGN KEY([ID])
REFERENCES [dbo].[EMPLOYEE] ([ID])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[EMPLOYER] CHECK CONSTRAINT [FK_EMPLOYEE_EMPLOYER]
GO
