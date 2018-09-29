INSERT INTO news (`title`, `description`,`image`,
 `content`, `created`) 
VALUES ('News 1', 'Description 1', 'image.jpg',
 'Content 1', '2018-09-23 10:10:10');


SELECT `title`, `content` FROM `news`;

SELECT * FROM `news` WHERE `created`
 LIKE '____-08-__%' AND image LIKE '%.png';

UPDATE news SET title = 'News 4'
  WHERE title = 'News 3';