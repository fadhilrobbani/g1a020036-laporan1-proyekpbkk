<?php
//Memuat namespace atau package berikut untuk mengakses UserController
use Controller\UserController;

//Memuat file autoload 
require_once('autoload.php');

//Memulai session
session_start();
//Jika session user sudah ada atau sudah dalam kondisi login, maka halaman dialihkan ke home.php
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="h-full">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST">
                <!-- Input yang disembunyikan ini berguna agar kita bisa menangkap method post login dengan tepat -->
                <input name="submit" value="login" hidden>
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>

        </div>
    </div>


    <?php
    //Karena kita akan memanggil method login dari kelas UserController
    //maka kita validasi dulu method POST yang dikirim form karena kita tidak menggunakan atribut action dari form
    if ('login' === ($_POST['submit'] ?? false)) {
        UserController::login(); ?>
        <!-- Menampilkan alert jika login gagal -->
        <div class="fixed top-10 p-4 mb-4 w-1/2 left-1/4 text-sm text-red-800 rounded-lg bg-red-100 text-center " role="alert">
            <span class="font-medium"><?php echo $_SESSION['message'] ?></span>
        </div>
    <?php } ?>

</body>

</html>