GRANT ALL PRIVILEGES
ON *.*
TO `joy`@`%`
IDENTIFIED BY '123456';


DROP DATABASE IF EXISTS `pr_blog`;
CREATE DATABASE `pr_blog`;
USE `pr_blog`;

SHOW TABLES;

CREATE TABLE article(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title CHAR(100) NOT NULL,
    `body` TEXT NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL
);

INSERT INTO article
SET title = '제목1',
`body` = '내용1',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목2',
`body` = '내용2',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목3',
`body` = '내용3',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목4',
`body` = '내용4',
regDate = NOW(),
updateDate = NOW();

INSERT INTO article
SET title = '제목5',
`body` = '내용5',
regDate = NOW(),
updateDate = NOW();


SELECT * FROM article;

CREATE TABLE `member`(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL, 
    updateDate DATETIME NOT NULL,
    memId CHAR(20) NOT NULL,
    memPw CHAR(100) NOT NULL,
    memName CHAR(20) NOT NULL,
    memNick CHAR(20) NOT NULL,
    memEmail CHAR(100) NOT NULL, 
    memPhNum CHAR(20) NOT NULL,
    delstatus BOOLEAN NOT NULL
);

INSERT INTO `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = 'user1',
memPw = '1111',
memName = '홍길동',
memNick = '도적',
memEmail = '1111@test.com',
memPhNum = '01011111111';

INSERT INTO `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = 'user2',
memPw = '2222',
memName = '대장금',
memNick = '요리사',
memEmail = '2222@test.com',
memPhNum = '01022222222';

INSERT INTO `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = 'user3',
memPw = '3333',
memName = '슈퍼맨',
memNick = '히어로',
memEmail = '3333@test.com',
memPhNum = '01033333333';

INSERT INTO `member`
SET regdate = NOW(),
updateDate = NOW(),
memId = 'user4',
memPw = '4444',
memName = '스폰지밥',
memNick = '스펀지',
memEmail = '4444@test.com',
memPhNum = '01044444444';


SELECT * FROM `member`;

CREATE TABLE reply (
    id INT(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    relId INT(30) UNSIGNED NOT NULL,
    `body` TEXT NOT NULL,
    relTypeCode CHAR(20) NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL
);

SELECT * FROM reply;

CREATE TABLE board(
    id INT(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(20) NOT NULL,
    boardCode CHAR(20) NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    memId INT(20) UNSIGNED NOT NULL
);

SELECT * FROM board;

INSERT INTO board 
SET `name` = '공지',
boardCode = 'notice',
regDate = NOW(),
updateDate = NOW();

INSERT INTO board 
SET `name` = '자유',
boardCode = 'free',
regDate = NOW(),
updateDate = NOW();

UPDATE board
SET `name` =,
boardCode = ,
regDate = NOW()
WHERE board.id = ;