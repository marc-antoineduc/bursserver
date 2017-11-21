USE bursserver_bd;


DROP TABLE IF EXISTS tblLED;
CREATE TABLE tblLED(
Id 			INT 			AUTO_INCREMENT,
Etat		BOOL			NULL,
Emplacement	VARCHAR(300)	NULL,
PRIMARY KEY(Id)
);

INSERT INTO tblLED (Emplacement,Etat) VALUES('LED 1 du raspberry pi',0);	
INSERT INTO tblLED(Emplacement,Etat) VALUES ("tessticcule",0);
SELECT * FROM tblLED;
