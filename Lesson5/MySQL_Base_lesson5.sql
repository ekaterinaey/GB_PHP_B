
DROP DATABASE IF EXISTS php_base_b;
CREATE DATABASE php_base_b;
use php_base_b;

DROP TABLE IF EXISTS images;
create table images(
  id SERIAL PRIMARY KEY,
  name VARCHAR(128) COMMENT 'Имя картинки',
  image_path VARCHAR(255) COMMENT 'Путь до картинки',
  size VARCHAR(128) COMMENT 'Размер картинки',
  viewed BIGINT COMMENT 'Количество просмотров'
  
) COMMENT 'Картинки';

INSERT INTO images VALUES
(1, '123', '/img/123.jpg', '225 x 225', 0),
(2, '124', '/img/124.jpg', '800 x 800', 0)
;

INSERT INTO images VALUES
(3, '456', '/img/456.jpg', '1000 x 911', 0),
(4, '457', '/img/457.jpg', '750 x 750', 0)
;
