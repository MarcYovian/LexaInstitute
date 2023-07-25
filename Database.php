<?php

class Database
{
    private $dbHost;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $connection;

    public function __construct($config)
    {
        $this->dbHost = $config['host'];
        $this->dbUsername = $config['username'];
        $this->dbPassword = $config['password'];
        $this->dbName = $config['database'];
        $this->connection = mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword);

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_errno() . "-" . mysqli_connect_error());
        }
    }

    public function createDB()
    {
        $query = "CREATE DATABASE IF NOT EXISTS " . $this->dbName;
        $result = mysqli_query($this->connection, $query);
        if (!$result) {
            die("Query Error: " . mysqli_errno($this->connection) . " -
" . mysqli_error($this->connection));
        }
    }

    public function selectDB()
    {
        $result = mysqli_select_db($this->connection, $this->dbName);
        if (!$result) {
            die("Query Error: " . mysqli_errno($this->connection) . " - " . mysqli_error($this->connection));
        }
    }

    public function createTable($tableName, $query)
    {
        $result = mysqli_query($this->connection, "CREATE TABLE IF NOT EXISTS $tableName ($query)");

        if (!$result) {
            die("Query failed: " . mysqli_errno($this->connection) . "-" . mysqli_error($this->connection));
        }
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }
    public function getData($query)
    {
        $result = mysqli_query($this->connection, $query);
        $resultSet = [];

        if (!$result) {
            die("Query Error: " . mysqli_errno($this->connection) . " -" . mysqli_error($this->connection));
        };

        while ($row = mysqli_fetch_array($result)) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

$database = new Database($config);
$connection = $database->getConnection();
$database->createDB();
$database->selectDB();

$database->createTable("users", "
    `nip` char(10) NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `alamat` text,
    `image_path` varchar(255) NOT NULL,
    `isAdmin` tinyint(1) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`nip`)
");

$database->createTable("posts", "
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nip` char(10) NOT NULL,
    `title` varchar(255) NOT NULL,
    `tagline` varchar(255) NOT NULL,
    `content` text NOT NULL,
    `image_path` varchar(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`nip`) REFERENCES `users`(`nip`)
");

$existingQuery = $database->query("SELECT `nip` FROM `users` WHERE `nip` = ?", ['1202212028'])->fetch();

if (!$existingQuery) {
    $database->query("INSERT INTO `users`
    (`nip`, `name`, `email`, `password`, `alamat`, `image_path`, `isAdmin`) 
    VALUES (?,?,?,?,?,?,?)", ['1202212028', 'Rafi Ardinata', 'rafi@gmail.com', sha1('123'), 'Sukodono Tercinta RT 27', 'rafi.jpg', 0]);
};

// $database->createTable("comments", "
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `id_Article` char(10) NOT NULL,
//     `post_id` int(11) NOT NULL,
//     `email` varchar(255) NOT NULL,
//     `content` text NOT NULL,
//     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     PRIMARY KEY (`id`),
//     FOREIGN KEY (`id_Article`) REFERENCES `posts`(`id`)
// ");