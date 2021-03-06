/*-------Creacion Tablas emp y dept MySQL 5.0.X--------*/;

USE test;

DROP TABLE IF EXISTS dept;
CREATE TABLE  dept (
  id        int(2)      NOT NULL,
  dnombre   varchar(14) collate utf8_spanish_ci default NULL,
  localidad varchar(14) collate utf8_spanish_ci default NULL,
  CONSTRAINT PK_DEPT PRIMARY KEY  (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO dept VALUES (10,'CONTABILIDAD' ,'SEVILLA' );
INSERT INTO dept VALUES (20,'INVESTIGACION','MADRID'  );
INSERT INTO dept VALUES (30,'VENTAS'       ,'VALENCIA');
INSERT INTO dept VALUES (40,'PRODUCCION'   ,'BILBAO'  );


DROP TABLE IF EXISTS emp;
CREATE TABLE  emp (
  nro      int(4) NOT NULL,
  apellido varchar(10) collate utf8_spanish_ci NOT NULL,
  oficio   varchar(10) collate utf8_spanish_ci default NULL,
  dir      int(4) default NULL COMMENT 'Clave ajena que referencia al Director del Empleado',
  alta     date default '2000-01-01' COMMENT 'Fecha de Alta del Empleado',
  salario  int(10) default NULL,
  comision int(10) default NULL,
  id       int(2) NOT NULL COMMENT 'Clave ajena que referencia al Departamento del Empleado',
  CONSTRAINT PK_EMP PRIMARY KEY (nro),
  CONSTRAINT FK_EMP_EMP FOREIGN KEY (dir) REFERENCES emp (nro) ON DELETE SET NULL,
  CONSTRAINT FK_EMP_DEPT FOREIGN KEY (id) REFERENCES dept (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ;

INSERT INTO emp VALUES (7839,'REY',      'PRESIDENTE',NULL, '2000-12-11', 65000, NULL  ,10);
INSERT INTO emp VALUES (7698,'NEGRO',    'DIRECTOR',  7839, '2002-02-11', 37050, NULL  ,30);
INSERT INTO emp VALUES (7566,'JIMENEZ',  'DIRECTOR',  7839, '2003-02-01', 38675, NULL  ,20);
INSERT INTO emp VALUES (7782,'CEREZO',   'DIRECTOR',  7839, '2003-05-11', 31850, NULL  ,10);
INSERT INTO emp VALUES (7499,'ARROYO',   'VENDEDOR',  7698, '2003-17-11', 20800, 3900  ,30);
INSERT INTO emp VALUES (7521,'SALA',     'VENDEDOR',  7698, '2004-09-15', 16250, 6500  ,30);
INSERT INTO emp VALUES (7654,'MARTIN',   'VENDEDOR',  7698, '2004-09-15', 16250, 18200 ,30);
INSERT INTO emp VALUES (7844,'TOVAR',    'VENDEDOR',  7698, '2004-09-15', 19500, 0     ,30);
INSERT INTO emp VALUES (7900,'JIMENO',   'EMPLEADO',  7698, '2004-09-15', 12350, NULL  ,30);
INSERT INTO emp VALUES (7902,'FERNANDEZ','ANALISTA',  7566, '2004-09-15', 39000, NULL  ,20);
INSERT INTO emp VALUES (7788,'GIL',      'ANALISTA',  7566, '2004-09-15', 39000, NULL  ,20);
INSERT INTO emp VALUES (7369,'SANCHEZ',  'EMPLEADO',  7902, '2004-11-02', 10400, NULL  ,20);
INSERT INTO emp VALUES (7876,'ALONSO',   'EMPLEADO',  7788, '2005-04-12', 14300, NULL  ,20);
INSERT INTO emp VALUES (7934,'MUNIZ',    'EMPLEADO',  7782, '2006-12-15', 16900, NULL  ,10);

/*Hecho y revisado hasta Aqui*/;
