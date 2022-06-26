
# MYSQL Tutorial

- [MYSQL Tutorial](#mysql-tutorial)
  - [Login into mysql](#login-into-mysql)
  - [Show All Database Tables](#show-all-database-tables)
  - [Create database table](#create-database-table)
  - [USING THE DATATABLE](#using-the-datatable)
  - [DROP DATA TABLE](#drop-data-table)
  - [INSERT DATA TABLE](#insert-data-table)
  - [Retrive Data from the table](#retrive-data-from-the-table)
    - [SELECT * FROM student;](#select--from-student)
    - [SELECT * FROM student WHERE id=1;](#select--from-student-where-id1)
    - [SELECT * FROM student WHERE id=1 OR id=2;](#select--from-student-where-id1-or-id2)
    - [SELECT * FROM student WHERE name="Narayan Dhakal"](#select--from-student-where-namenarayan-dhakal)
    - [SELECT * FROM student WHERE name like "n%"](#select--from-student-where-name-like-n)
    - [SELECT * FROM student WHERE name like "%ak%"](#select--from-student-where-name-like-ak)
  - [Delete data](#delete-data)
  - [UPDATE DATA](#update-data)

## Login into mysql
mysql -u root -p
password : 

## Show All Database Tables

SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| gces_practice      |
| information_schema |
| mysql              |
| news-site          |
| padandas           |
| performance_schema |
| phpmyadmin         |
| site               |
| test               |
+--------------------+
9 rows in set (0.001 sec)


## Create database table


```CREATE DATABASE wt_2020;```

## USING THE DATATABLE
`USE wt_2020;` // TO GET INTO DATABASE

    MariaDB [(none)]> `USE wt_2020;`
Database changed
MariaDB [wt_2020]> CREATE TABLE student (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar(100) NOT NULL,
    -> bio text ,
    -> address varchar(100),
    -> phone varchar(15),
    -> roll int UNIQUE,
    -> PRIMARY KEY(id)
    -> );

## DROP DATA TABLE

` DROP wt_2020;` // DELETE wt_2020 DATABASE



## INSERT DATA TABLE
`` INSERT INTO `student` (`name`,`bio`,`address`,`phone`,`roll`) VALUES
 ("Nirvna Grg","Software engineering","Pokahra,chhorepatan","9863379599","2"),
 ("Nrn Dhakal","Software engineering","Pokahra,chhorepatan","9846945604","3");
``

## Retrive Data from the table 

### SELECT * FROM student;

+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
|  2 | Nirvna Grg     | Software engineering | Pokahra,chhorepatan | 9863379599 |    2 |
|  3 | Nrn Dhakal     | Software engineering | Pokahra,chhorepatan | 9846945604 |    3 |
|  4 | Santosh Regmi  | santa chor           | lamachaur           | 9846945604 |    4 |
|  5 | Subash         | subash chor          | lamachaur           | 9846945605 |    6 |
+----+----------------+----------------------+---------------------+------------+------+

### SELECT * FROM student WHERE id=1;
+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
+----+----------------+----------------------+---------------------+------------+------+
1 row in set (0.001 sec)


### SELECT * FROM student WHERE id=1 OR id=2;
+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
|  2 | Nirvna Grg     | Software engineering | Pokahra,chhorepatan | 9863379599 |    2 |
+----+----------------+----------------------+---------------------+------------+------+
2 rows in set (0.013 sec)


### SELECT * FROM student WHERE name="Narayan Dhakal"

+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
+----+----------------+----------------------+---------------------+------------+------+
1 row in set (0.000 sec)

### SELECT * FROM student WHERE name like "n%"

+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
|  2 | Nirvna Grg     | Software engineering | Pokahra,chhorepatan | 9863379599 |    2 |
|  3 | Nrn Dhakal     | Software engineering | Pokahra,chhorepatan | 9846945604 |    3 |
+----+----------------+----------------------+---------------------+------------+------+
3 rows in set (0.000 sec)

### SELECT * FROM student WHERE name like "%ak%"

+----+----------------+----------------------+---------------------+------------+------+
| id | name           | bio                  | address             | phone      | roll |
+----+----------------+----------------------+---------------------+------------+------+
|  1 | Narayan Dhakal | Software engineering | Pokahra,chhorepatan | 9846945604 |    5 |
|  3 | Nrn Dhakal     | Software engineering | Pokahra,chhorepatan | 9846945604 |    3 |
+----+----------------+----------------------+---------------------+------------+------+
2 rows in set (0.001 sec)

## Delete data

## UPDATE DATA

 ```SQL UPDATE `student` SET `name`='Naran' WHERE id=1; ```
