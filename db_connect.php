<?php
//establishes database connections and returns PDO variable named 'pdo'.
//use $pdo for accessing database.

$host = '127.0.0.1';
$db   = 'csiddysz_csi';
$user = 'csiddysz';
$pass = 'Tvr@#1125120';
$charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];

// try {
//      $pdo = new PDO($dsn, $user, $pass, $options);
// } catch (\PDOException $e) {
//      throw new \PDOException($e->getMessage(), (int)$e->getCode());
// }
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$dbconn = mysqli_connect($host, $user, $pass, $db);

if (!$dbconn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>
