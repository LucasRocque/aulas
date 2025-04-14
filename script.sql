Create database projeto;
USE projeto;

CREATE TABLE `projeto`.`aluno` (
  `idAluno` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(100) NOT NULL,
  `RA` INT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAluno`));
  
INSERT INTO aluno (Nome,RA,Email) VALUES ('Lucas', '22207331','lucas.la@sempreceub.com');
SELECT * FROM aluno;
INSERT INTO aluno (Nome,RA,Email) VALUES ('Zago', '222012424','Zagozin@sempreceub.com');
INSERT INTO aluno (Nome,RA,Email) VALUES ('Nabu', '222015262','cetin@sempreceub.com');

UPDATE aluno SET RA = 22208388 WHERE idAluno=;

UPDATE aluno SET senha =md5('123456') WHERE idAluno=20;