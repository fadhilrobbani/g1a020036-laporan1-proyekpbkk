<?php

use Controller\UserController;
//Memuat file kelas yang dibutuhkan. Biasanya bisa kita gunakan fitur autoload jika install composer agar tidak perlu repot-repot mengimpor satu-satu
require_once('UserController.php');
require_once("User.php");
session_start();
session_destroy();
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>

<body>
    <form method="post">
        <input type="text" name="username" placeholder="username" />
        <input type="text" name="password" placeholder="password" />
        <button type="submit">login</button>
    </form>
    <?php
    // $users = UserController::getUsers();
    // foreach ($users as $user) {
    //     echo $user->username;
    // }
    // if ($_POST && isset($_POST['username'])) {
    //     UserController::login();
    // } else {
    //     echo $_SESSION['message'];
    // }
    ?>

</body>

</html>