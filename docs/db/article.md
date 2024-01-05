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

```SQL
CREATE TABLE `php_buddy`.`article` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(128) NOT NULL , `content` TEXT NOT NULL , `published_at` DATETIME NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```