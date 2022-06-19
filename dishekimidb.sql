CREATE TABLE `dishekimidb` DEFAULT CHARACTER SET utf8 COLLATE 
utf8_turkish_ci; 

USE `dishekimidb`; 

CREATE TABLE `kullanicilar` 
  ( 
     `id`           INT(11) NOT NULL auto_increment, 
     `kullaniciadi` VARCHAR(255) NOT NULL, 
     `eposta`       VARCHAR(255) NOT NULL, 
     `sifre`        VARCHAR(255) NOT NULL, 
     PRIMARY KEY (`id`) 
  ); 

  create table randevular(

  create table randevular(

	 randevuid int(11) NOT NULL auto_increment, 
    randevusaati varchar(50) ,
    randevugunu varchar(50) ,
    telefon varchar(50) ,
    kullaniciid int ,
    PRIMARY key (randevuid) ,
    FOREIGN key (kullaniciid) REFERENCES kullanicilar(id) 
    
);
    
);