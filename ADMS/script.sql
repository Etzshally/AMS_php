CREATE DATABASE ADMS;
create TABLE class(
    	RowId int not null AUTO_INCREMENT primary key,
    	className varchar(20),
    	Faculty	varchar(20),
    	IsActive	BINARY,
    	CreatedBy	varchar(50),
    	CreatedDate DATE
    
);

CREATE TABLE Subject(
    RowId int not null AUTO_INCREMENT PRIMARY KEY,
    SubjectName varchar(50),
    SubjectCode	varchar(10),
    Faculty	varchar(20),
    IsActive BINARY,
    CreatedBy	varchar(50),
    CreatedDate DATE
    
);
CREATE TABLE Faculty(
    RowId int not null AUTO_INCREMENT PRIMARY KEY,
    FacultyName varchar(20),
    IsActive BINARY,
    CreatedBy varchar(20),
    CreatedDate DATE
 );
  CREATE table student(
 	RowId int not null AUTO_INCREMENT PRIMARY KEY,
     StudentName varchar(50),
     StudentFaculty varchar(20),
     IsAdmin varchar(20),
     Enrolledclass varchar(20),
     PhoneNo varchar(20),
     Email varchar(50),
     UserId varchar(20),
     UserPWD varchar(50),
     IsActive INT,
     CreatedBy varchar(20),
     CreatedDate DATE
 );

  Create table ClassSubject 
(
    RowId int not null AUTO_INCREMENT PRIMARY KEY,
    SubjectName Varchar(20),
    Faculty Varchar(20),
    Class Varchar(20),    
    IsActive int,
    CreatedBy varchar(25),
    CreateDate Date
    
);