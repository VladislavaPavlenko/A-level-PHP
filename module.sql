mysql> create database people;

mysql> use people;

mysql> create table person(
    -> id INT NOT NULL auto_increment primary key,
    -> name VARCHAR(50) NOT NULL DEFAULT 'person',
    -> pwd VARCHAR(50) NOT NULL DEFAULT 'admin',
    -> email VARCHAR(50) NOT NULL DEFAULT 'admin@gmail.com',
    -> gender VARCHAR(50) NOT NULL DEFAULT '0'
    -> );

mysql> INSERT INTO person (name, pwd, email, gender) VALUES
    -> ("Vasya", "21341234qwfsdf", "mmm@mmail.com", "m"),
    -> ("Alex", "21341234", "mmm@gmail.com", "m"),
    -> ("Alexey", "qq21341234Q", "alexey@gmail.com", "m"),
    -> ("Helen", "MarryMeeee", "hell@gmail.com", "f"),
    -> ("Jenny", "SmakeMyb", "eachup@gmail.com", "f"),
    -> ("Lora", "burn23", "tpicks@gmail.com", "f");

// task 1
mysql> SELECT * FROM person;
+----+--------+----------------+------------------+--------+
| id | name   | pwd            | email            | gender |
+----+--------+----------------+------------------+--------+
|  1 | Vasya  | 21341234qwfsdf | mmm@mmail.com    | m      |
|  2 | Alex   | 21341234       | mmm@gmail.com    | m      |
|  3 | Alexey | qq21341234Q    | alexey@gmail.com | m      |
|  4 | Helen  | MarryMeeee     | hell@gmail.com   | f      |
|  5 | Jenny  | SmakeMyb       | eachup@gmail.com | f      |
|  6 | Lora   | burn23         | tpicks@gmail.com | f      |
+----+--------+----------------+------------------+--------+


// task 2
mysql> SELECT CONCAT("This is ", name, IF(gender="f", ", she ", ", he "), "has email " ,email) AS info FROM person;
+-----------------------------------------------+
| info                                          |
+-----------------------------------------------+
| This is Vasya, he has email mmm@mmail.com     |
| This is Alex, he has email mmm@gmail.com      |
| This is Alexey, he has email alexey@gmail.com |
| This is Helen, she has email hell@gmail.com   |
| This is Jenny, she has email eachup@gmail.com |
| This is Lora, she has email tpicks@gmail.com  |
+-----------------------------------------------+

// task 3
mysql> SELECT CONCAT("We have ", COUNT(*), IF(gender="f", " girls !", " boys !")) AS "Gender information" FROM person GROUP BY gender;
+--------------------+
| Gender information |
+--------------------+
| We have 3 boys !   |
| We have 3 girls !  |
+--------------------+

// task 4
mysql> SELECT name, COUNT(*) AS words FROM vocabulary, word WHERE (vocabulary.id=word.vocabulary_id) GROUP  BY word.vocabulary_id;
+---------+-------+
| name    | words |
+---------+-------+
| animals |    10 |
| school  |    10 |
| nature  |    10 |
| human   |    10 |
| SF      |    10 |
+---------+-------+
