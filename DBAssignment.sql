
CREATE TABLE ACCOUNT(
				ID		INT		NOT NULL,
				USERNAME	TEXT		NOT NULL,
				PASSWORD	TEXT		NOT NULL,
				LEVEL	INT		NOT NULL,
				PRIMARY KEY(ID)
);

CREATE TABLE COMPANY (
				ID			INT		NOT NULL,
				ADDRESS		TEXT	NOT NULL,
				WEBSITE		TEXT,
				NAME		TEXT	NOT NULL,
				BUSINESS_FIELD		TEXT	NOT NULL,
				BUSINESS_TYPE		TEXT	NOT NULL,
				MAXPOST		INT		NOT NULL,
				REMAINING	INT		NOT NULL,
				PRIMARY KEY(ID)
);

CREATE TABLE EMPLOYEE(
				ID			INT		NOT NULL,
				FULLNAME		TEXT	NOT NULL,
				ID_COMPANY	INT		NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_COMP_EMP FOREIGN KEY(ID_COMPANY) REFERENCES COMPANY(ID),
				CONSTRAINT FK_ACC_EMP FOREIGN KEY(ID) REFERENCES ACCOUNT(ID)
);

CREATE TABLE EMPLOYER(
				ID			INT		NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_EMPLOYEE_EMPLOYER		FOREIGN KEY(ID)	REFERENCES EMPLOYEE(ID)
);

CREATE TABLE RECRUIT_POST_UPLOADER(
				ID			INT		NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_EMPLOYEE_UPLOADER		FOREIGN KEY(ID)	REFERENCES EMPLOYEE(ID)
);

CREATE TABLE EMPLOYEE_PHONE(
				EMP_ID		INT		NOT NULL,
				PHONE_NUM	INT		NOT NULL,
				PRIMARY KEY(EMP_ID,PHONE_NUM),
				CONSTRAINT FK_EMP_PHONE FOREIGN KEY(EMP_ID) REFERENCES EMPLOYEE(ID)
);

CREATE TABLE NORMAL_USER(
				ID			INT			NOT NULL,
				FULLNAME		TEXT		NOT NULL,
				BIRTHDATE	DATE		NOT NULL,
				SEX			CHAR(1)		NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_ACC_USER FOREIGN KEY(ID) REFERENCES ACCOUNT(ID)
);

CREATE TABLE POST(
				ID				INT			NOT NULL,
				UPLOADER_NAME	TEXT		NOT NULL,
				TITLE		TEXT		NOT NULL,
				UPLOAD_TIME		DATETIME	NOT NULL,
				PRIMARY KEY(ID)
);

CREATE TABLE BLOG(
				ID			INT		NOT NULL,
				CONTEXT		TEXT	NOT NULL,
				ID_USER		INT		NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_USER_BLOG FOREIGN KEY(ID_USER) REFERENCES NORMAL_USER(ID)
);

CREATE TABLE RECRUIT_POST(
				ID				INT			NOT NULL,
				WORK_PLACE		TEXT,
				CV_DEADLINE		DATETIME,
				ID_UPLOADER		INT			NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_RECR_POST FOREIGN KEY(ID) REFERENCES POST(ID),
				CONSTRAINT FK_UPLOADER_POST FOREIGN KEY(ID_UPLOADER) REFERENCES RECRUIT_POST_UPLOADER(ID)
);

CREATE TABLE RECRUIT_POSITION(
				ID			INT		NOT NULL,
				POSTION		TEXT	NOT NULL,
				REQUIREMENT		TEXT,
				WORK_TIME		TEXT,
				SALARY		INT		NOT NULL,
				QUANTITY	INT		NOT NULL
				PRIMARY KEY(ID)
);

CREATE TABLE RPOST_POSITION(
				ID_RPOST		INT		NOT NULL,
				ID_POSITION		INT		NOT NULL,
				PRIMARY KEY(ID_RPOST,ID_POSITION),
				CONSTRAINT FK_RPOST_RPOSTPOSI FOREIGN KEY(ID_RPOST) REFERENCES RECRUIT_POST(ID),
				CONSTRAINT FK_POSITION_RPOSTPOSI FOREIGN KEY(ID_POSITION) REFERENCES RECRUIT_POSITION(ID),
);



CREATE TABLE PACK(
				ID					INT			NOT NULL,
				PRICE				INT			NOT NULL,
				EXPIRATION			INT			NOT NULL,
				MAX_POST			INT			NOT NULL,
				PRIMARY KEY(ID)
);


CREATE TABLE CV(
				ID				INT				NOT NULL,
				ID_USER			INT				NOT NULL,
				EMAIL			TEXT,
				CARREER_OBJ		TEXT			NOT NULL,
				EXP_FIELD		TEXT			NOT NULL,
				TIME_ACCUM		INT				NOT NULL,
				PRIMARY KEY(ID),
				CONSTRAINT FK_USER_CV FOREIGN KEY(ID_USER) REFERENCES NORMAL_USER(ID)
);

CREATE TABLE CV_PHONENUM(
				ID				INT				NOT NULL,
				PHONENUM		INT			NOT NULL,
				PRIMARY KEY(ID,PHONENUM),
				CONSTRAINT FK_CV_PHONE FOREIGN KEY(ID) REFERENCES CV(ID)
);


CREATE TABLE PURCHASE(
				ID_PACK			INT			NOT NULL,
				ID_COMP			INT			NOT NULL,
				PAY_METHOD		TEXT		NOT NULL,
				PURCHASED_DATE		DATE		NOT NULL,
				PRIMARY KEY(ID_PACK,ID_COMP),
				CONSTRAINT FK_PACK_PURCHASE FOREIGN KEY(ID_PACK) REFERENCES PACK(ID),
				CONSTRAINT FK_COMP_PURCHASE FOREIGN KEY(ID_COMP) REFERENCES COMPANY(ID)
);


CREATE TABLE SUBMIT_CV(
				ID_RPOST		INT		NOT NULL,
				ID_CV			INT		NOT NULL,
				TIMESUBMIT		DATE		NOT NULL,
				PRIMARY KEY(ID_RPOST,ID_CV),
				CONSTRAINT FK_RPOST_SUBMITCV FOREIGN KEY(ID_RPOST) REFERENCES RECRUIT_POST(ID),
				CONSTRAINT FK_CV_SUBMITCV FOREIGN KEY(ID_CV) REFERENCES CV(ID)
);				