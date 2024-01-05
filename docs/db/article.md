# `article` table

## Table structure
| Name           | id      | title   | content | published_at |
|----------------|---------|---------|---------|--------------|
| Type           | INT     | VARCHAR | TEXT    | DATETIME     |
| Length         |         | 128     |         |              |
| Index          | Primary |         |         |              |
| Null           |         |         |    X    |       X      |
| Auto Increment | X       |         |         |              |

## SQL

### To Create Table

```SQL
CREATE TABLE `php_buddy`.`article` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(128) NOT NULL , `content` TEXT NOT NULL , `published_at` DATETIME NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

### To Insert Sample Data

```SQL
INSERT INTO `article` (`id`, `title`, `content`, `published_at`) VALUES (NULL, 'Hello World', 'Welcome to our first article, which is a perfect article if you want to read something really useful and meaningful in life.', '2024-01-05 23:16:09');
```