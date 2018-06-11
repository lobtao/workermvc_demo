CREATE TABLE tb_test
(
  fid   INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  fname VARCHAR(255),
  ftime DATETIME
);


INSERT INTO test.tb_test (fid, fname, ftime) VALUES (1, '肖滔', NULL);
INSERT INTO test.tb_test (fid, fname, ftime) VALUES (2, 'lobtao', '2018-04-24 15:23:39');
INSERT INTO test.tb_test (fid, fname, ftime) VALUES (3, 'emily', '2018-04-24 15:23:39');
