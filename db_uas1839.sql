USE db_uas1839; 

CREATE TABLE `tbl_mahasiswa` ( 
    `npm` CHAR(12) NOT NULL , 
    `nama` VARCHAR(35) NOT NULL ,
    `alamat` TEXT NULL , 
    `no_hp` VARCHAR(15) NULL , 
    PRIMARY KEY (`npm`)
);

CREATE TABLE `tbl_matkul` ( 
    `kode_matkul` CHAR(6) NOT NULL ,
    `nama_matkul` VARCHAR(35) NOT NULL ,
    PRIMARY KEY (`kode_matkul`)
);

CREATE TABLE `tbl_nilai`(
  `npm` CHAR(12) NOT NULL,
  `kode_matkul` CHAR(6) NOT NULL,
  `nilai_tugas` INT(3) NULL,
  `nilai_uts` INT(3) NULL,
  `nilai_uas` INT(3) NULL,
  CONSTRAINT FK_NilaiNPM FOREIGN KEY(npm) REFERENCES tbl_mahasiswa(npm),
  CONSTRAINT FK_NilaiMatkul FOREIGN KEY(kode_matkul) REFERENCES tbl_matkul(kode_matkul)
)