CREATE Database `currency`

CREATE TABLE `user`(
    username varchar(20) NOT NULL,
    userid INT(10) NOT NULL
)

ALTER TABLE `user` ADD CONSTRAINT primary_key PRIMARY KEY(userid)

CREATE TABLE `data`(
    currencyname varchar(20) NOT NULL, 
    cuurencyvalue INT(10) NOT NULL
)

ALTER TABLE `data` ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY
ALTER TABLE `data` ADD CONSTRAINT unique_key UNIQUE KEY(currencyname)