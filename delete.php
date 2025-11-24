<?php
session_start();

$host = 'MySQL-8.0';
$dbname = 'users';
$username = 'root';
$password = '';

try {
    $conn = mysqli_connect($host, $username, $password, $dbname);
}

catch(Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

function delete($login)
{
    global $conn;

    session_unset();
    session_destroy();

    setcookie("name", "", time() - 3600, "/");
    setcookie("auth", "", time() - 3600, "/");

    $stmt = $conn->prepare("DELETE FROM data WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();

    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    delete($_SESSION["name"]);
}