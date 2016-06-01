CREATE TABLE IF NOT EXISTS `10152993_kasutajad` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `passw` varchar(40) NOT NULL
);

INSERT INTO 10152993_kasutajad (username, passw) VALUES ('tester', SHA1('parool'));