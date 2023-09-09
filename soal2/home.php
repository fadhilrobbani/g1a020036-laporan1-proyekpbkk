<?php

use Controller\UserController;
//Memuat file kelas yang dibutuhkan. Biasanya bisa kita gunakan fitur autoload jika install composer agar tidak perlu repot-repot mengimpor satu-satu
require_once('UserController.php');
require_once("User.php");
session_start();
session_destroy();
//return to login if not logged in
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('location:index.php');
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
    <p><?php echo $_SESSION['user'] ?></p>
    <p><?php echo $_SESSION['message'] ?></p>
    <form action="" method="post">

        <button type="submit">logout</button>
    </form>
</body>

</html>