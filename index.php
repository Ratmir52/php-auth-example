<?php
    session_start();
    if (isset($_COOKIE["name"])) {

        header("Location: auth.php");
        exit;
    }
    else {
        $_SESSION["auth"] = false;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SYSTEM ACCESS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1 class="typing">[ SYSTEM ACCESS REQUIRED ]</h1>
    <p style="text-align: center; margin-bottom: 30px; color: #0a0;">
        // Авторизуйся чтобы получить компромат на Сашу //
    </p>

    <form action="auth.php" method="post">
        <label>
            <input type="text" name="login" required placeholder="[ВВЕДИТЕ ЛОГИН]">
            <input type="password" name="password" required placeholder="[ВВЕДИТЕ ПАРОЛЬ]">
            <button type="submit">[ ПОДТВЕРДИТЬ ]</button>
        </label>
    </form>
</div>
</body>
</html>




