<?php
session_start();


function logout()
{
    global $conn;

    session_unset();
    session_destroy();

    setcookie("name", "", time() - 3600, "/");
    setcookie("auth", "", time() - 3600, "/");

    //$stmt = $conn->prepare("DELETE FROM data WHERE login = ?");
    //$stmt->bind_param("s", $login);
    //$stmt->execute();

    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    logout();
}