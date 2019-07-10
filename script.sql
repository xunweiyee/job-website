-- DROP TABLE seeker;
CREATE TABLE seeker (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- DROP TABLE company;
CREATE TABLE company (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phoneNum INT(10) NOT NULL,
    location VARCHAR(50) NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- DROP TABLE employer;
CREATE TABLE employer (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    companyID INT(6) UNSIGNED NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT emp
    FOREIGN KEY (companyID) REFERENCES company(id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
);

-- DROP TABLE job;
CREATE TABLE job (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    specialisation VARCHAR(30) NOT NULL,--Intern|Gradute|Junior|Mid|Senior
    level VARCHAR(30) NOT NULL,
    location VARCHAR(30) NOT NULL,
    salary INT(6) UNSIGNED,
    employerID INT(6) UNSIGNED NOT NULL,
    companyID INT(6) UNSIGNED NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT jobEmp
    FOREIGN KEY (employerID) REFERENCES employer(id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT jobCom
    FOREIGN KEY (companyID) REFERENCES company(id)
      ON DELETE CASCADE ON UPDATE CASCADE
);

-- DROP TABLE application;
CREATE TABLE application (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    seekerID INT(6) UNSIGNED NOT NULL,
    jobID INT(6) UNSIGNED NOT NULL,
    application VARCHAR(500),
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT appSee
    FOREIGN KEY (seekerID) REFERENCES seeker(id)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
    CONSTRAINT appJob
    FOREIGN KEY (jobID) REFERENCES job(id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
);

-- desc Seeker;
-- desc Company;
-- desc Employer;
-- desc Job;
-- desc Application;

INSERT INTO seeker (name,email,password) VALUES ("Joshua Hahn","nulla.magna@amet.ca","FYT84RQE8RR");
INSERT INTO seeker (name,email,password) VALUES ("Karen Meadows","ligula.Nullam@etmagnisdis.net","XJP89DYI9KD");
INSERT INTO seeker (name,email,password) VALUES ("Lesley Pena","tellus@consectetuer.org","ZAU49WIA1FX");
INSERT INTO seeker (name,email,password) VALUES ("Brenna Frazier","consectetuer.euismod@nisidictum.net","PAT27WXJ7LW");
INSERT INTO seeker (name,email,password) VALUES ("Cally Rivas","sit@Proin.ca","JNU40FVJ8YT");
INSERT INTO seeker (name,email,password) VALUES ("Chancellor Osborn","Sed.congue.elit@liberoat.edu","RRQ17KKV2OO");
INSERT INTO seeker (name,email,password) VALUES ("Ifeoma Church","justo@lectus.ca","CIV08EBL5EU");
INSERT INTO seeker (name,email,password) VALUES ("Ivor Duke","adipiscing.non@cursuset.net","IZF72PGU4XZ");
INSERT INTO seeker (name,email,password) VALUES ("Kuame Larsen","parturient@Donecconsectetuer.edu","DCB76QAV4TT");
INSERT INTO seeker (name,email,password) VALUES ("Abel Gates","venenatis.vel.faucibus@nisi.ca","AQW29ZBY3XM");
INSERT INTO seeker (name,email,password) VALUES ("Theodore Cunningham","consequat.enim.diam@tellusnon.co.uk","GKZ25VZF2QZ");
INSERT INTO seeker (name,email,password) VALUES ("Paki Moody","lobortis.mauris.Suspendisse@lectuspedeultrices.ca","VXT92EUT0MK");


INSERT INTO company (name,email,phoneNum,location) VALUES ("Non Sollicitudin A Corp.","Mauris.magna@porttitorinterdumSed.ca",1618117999,"Monghidoro");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Non Corporation","malesuada.vel@tempusnonlacinia.org",1676175699,"Oordegem");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Dictum Associates","Aliquam.vulputate.ullamcorper@ornare.com",1693018999,"WagnelŽe");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Leo Corporation","neque@malesuada.edu",1631124199,"Wiesbaden");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Vitae PC","nibh.vulputate.mauris@varius.ca",1696088699,"Felixstowe");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Nec LLC","elit@antedictumcursus.ca",1633138799,"Karlsruhe");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Lorem Tristique Consulting","quis@diamnunc.co.uk",1678107999,"Vitry-sur-Seine");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Eget Varius Ltd","auctor@Quisque.com",1600089499,"Stekene");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Elit Company","amet.risus.Donec@scelerisquescelerisquedui.com",1658065699,"Portico e San Benedetto");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Sed Consulting","luctus.ut@Crasinterdum.net",1634022399,"Pincher Creek");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Eros Nec Tellus Inc.","magna.Praesent.interdum@sed.edu",1629011899,"Hindupur");
INSERT INTO company (name,email,phoneNum,location) VALUES ("Et Corp.","imperdiet.nec.leo@iaculislacus.edu",1681041599,"Westmount");


INSERT INTO employer (name,email,password,companyID) VALUES ("Enim Etiam Gravida Associates","orci@turpis.co.uk","TMD90BME1PI",5);
INSERT INTO employer (name,email,password,companyID) VALUES ("In Lobortis Tellus Industries","accumsan.convallis@Namconsequatdolor.edu","GJF27LLF9AZ",10);
INSERT INTO employer (name,email,password,companyID) VALUES ("Luctus Et Foundation","dictum@vestibulumnec.co.uk","SYV13EOJ9HK",8);
INSERT INTO employer (name,email,password,companyID) VALUES ("Lacinia Incorporated","mauris@Aliquamvulputateullamcorper.co.uk","JSR57DJR4TU",1);
INSERT INTO employer (name,email,password,companyID) VALUES ("Nunc Id Enim LLP","habitant.morbi@Duisdignissimtempor.net","VJO91TMU1WW",8);
INSERT INTO employer (name,email,password,companyID) VALUES ("Sapien Imperdiet Corporation","Integer.mollis@sollicitudin.ca","DFO24TLG7VF",1);
INSERT INTO employer (name,email,password,companyID) VALUES ("Commodo Corporation","Proin@vitaeerat.net","SOD46DCH2MK",10);
INSERT INTO employer (name,email,password,companyID) VALUES ("Non Nisi LLC","luctus.et.ultrices@molestie.net","RUR28JFO4BG",9);
INSERT INTO employer (name,email,password,companyID) VALUES ("Adipiscing LLC","gravida.non.sollicitudin@nequeNullamut.edu","WEP93TGS7HJ",7);
INSERT INTO employer (name,email,password,companyID) VALUES ("Eu Industries","Etiam@Morbi.co.uk","BZX65BGZ4WK",9);
INSERT INTO employer (name,email,password,companyID) VALUES ("Velit Limited","ac.arcu@venenatis.com","VLM41XDT7NV",8);
INSERT INTO employer (name,email,password,companyID) VALUES ("Sagittis Placerat Institute","Donec.felis@massaQuisqueporttitor.edu","LBZ08DPA7XM",6);
INSERT INTO employer (name,email,password,companyID) VALUES ("Dui In Company","rhoncus.Donec.est@fames.net","HYQ90HXB0LQ",4);
INSERT INTO employer (name,email,password,companyID) VALUES ("Semper Foundation","vel.arcu@pharetra.co.uk","NAD90RYH7AW",1);
INSERT INTO employer (name,email,password,companyID) VALUES ("Semper Erat In Incorporated","Sed.diam.lorem@nequeetnunc.org","CAA71TJJ1VA",8);
INSERT INTO employer (name,email,password,companyID) VALUES ("Proin Incorporated","parturient.montes@semper.co.uk","EYB26IQP4UN",3);
INSERT INTO employer (name,email,password,companyID) VALUES ("Malesuada Ut Sem Inc.","facilisis.lorem@arcuVestibulumante.edu","YDM64YWS4QC",7);
INSERT INTO employer (name,email,password,companyID) VALUES ("Suspendisse Consulting","sed.est.Nunc@metusAliquam.edu","KQC98ZHB3JI",10);


INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Benefit Coordinator","Junior","Services","Johor",6874,6,2);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Account Specialist","Junior","Services","Kedah",1521,10,9);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Climate Data Analyst","Senior","Sciences","Johor",4743,10,8);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Franchise Development Manager","Senior","Sales/Marketing","Kelantan",4742,7,1);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Financial Advisor","Gradute","Sales/Marketing","Kuala Lumpur",4293,4,8);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Material Handler","Gradute","Manufacturing","Kuala Lumpur",1406,7,2);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Back Waiter","Junior","Hotel/Restaurant","Labuan",1912,2,8);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Clinical Specialist","Junior","Healthcare","Melaka",3794,5,5);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Marine Engineer","Junior","Engineering","Negeri Sembilan",7657,4,4);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Mining Engineer","Junior","Engineering","Pahang",1528,7,5);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Program Coordinator","Senior","Education/Training","Penang",7239,4,2);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Network Engineer","Junior","Computer/Information Technology","Penang",6803,10,9);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Security Specialist","Intern","Computer/Information Technology","Perak",4606,2,2);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Pipe Fitter","Gradute","Building/Construction","Perlis",4921,4,4);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Executive Producer","Mid","Arts/Media/Communications","Putrajaya",7034,9,10);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Contract Recruiter","Junior","Admin/Human Resources","Sabah",2560,6,2);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Private Accountant","Senior","Accounting/Finance","Sarawak",5223,8,7);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Cleaner","Gradute","Others","Selangor",5796,3,10);
INSERT INTO job (title,level,specialisation,location,salary,employerID,companyID) VALUES ("Desktop Support Specialist","Mid","Computer/Information Technology","Terengganu",1933,8,8);


INSERT INTO application (seekerID,jobID,application) VALUES (1,6,"I really need money to sustain my life. Please give me the job.");
INSERT INTO application (seekerID,jobID,application) VALUES (9,8,"Enthusiatic about the position offered and promise can do the job well.");
INSERT INTO application (seekerID,jobID,application) VALUES (3,4,"Three years experience on the job offered and feel confident about it.");
INSERT INTO application (seekerID,jobID,application) VALUES (1,2,"Willing to learn this new sector and please accept me.");
INSERT INTO application (seekerID,jobID,application) VALUES (13,3,"Never involve in this sector before and wanted to try new thing.");
INSERT INTO application (seekerID,jobID,application) VALUES (2,2,"Hardworking person and willing to do any thing.");
INSERT INTO application (seekerID,jobID,application) VALUES (7,6,"Has 10 years experience in this sector.");
INSERT INTO application (seekerID,jobID,application) VALUES (7,4,"Get award on 2015 and has ability to solve various problem.");
INSERT INTO application (seekerID,jobID,application) VALUES (2,10,"Humble and hardworking person who need a job.");
INSERT INTO application (seekerID,jobID,application) VALUES (9,5,"Awarded as Best employee in previous job.");
INSERT INTO application (seekerID,jobID,application) VALUES (1,4,"Able to work with different kind of people.");
INSERT INTO application (seekerID,jobID,application) VALUES (13,1,"Positive mind and able to bring encouragement to the team.");
INSERT INTO application (seekerID,jobID,application) VALUES (1,10,"Need to have a job instantly and willing to do anything,");
INSERT INTO application (seekerID,jobID,application) VALUES (8,9,"7 years experience on this sector.");
INSERT INTO application (seekerID,jobID,application) VALUES (7,1,"Good at problem solving.");
INSERT INTO application (seekerID,jobID,application) VALUES (9,9,"Able to work overtime and willing to sacrfice.");
INSERT INTO application (seekerID,jobID,application) VALUES (3,8,"Never give up and has positive attitude. ");
INSERT INTO application (seekerID,jobID,application) VALUES (9,8,"Able to accept new challenges.");
INSERT INTO application (seekerID,jobID,application) VALUES (6,6,"Can do job well and can give good coorperation.");
INSERT INTO application (seekerID,jobID,application) VALUES (1,2,"Willing to learn new thing and accept any tasks given.");
INSERT INTO application (seekerID,jobID,application) VALUES (4,8,"Need a opportunity to learn new thing.");

-- SELECT * FROM seeker;
-- $formatted_datetime = date("d/m/y, H:i:s", strtotime($row["timestamp"]));
