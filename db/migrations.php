<?php

$config = require __DIR__ . '/../config.php';

$servername = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

$conn = new PDO("mysql:host=$servername", $username, $password);

try {
    $sql = "CREATE DATABASE $database";
    $conn->exec($sql);
    echo "Database created successfully" . PHP_EOL;
    $conn->query("use $database");

    $sql = "CREATE TABLE comment (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        text text,
        user_photo varchar(256),
        user_id varchar(256)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table \"users\" created successfully" . PHP_EOL;

    $sql = "INSERT INTO users (full_name, email, password)
    VALUES ('John Doe', 'admin@example.com', '" . password_hash('admin', PASSWORD_BCRYPT) . "')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "User \"admin\" was inserted into database" . PHP_EOL;

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
