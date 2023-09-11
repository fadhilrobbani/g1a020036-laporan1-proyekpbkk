<?php
//Memuat namespace atau package berikut untuk mengakses UserController
use Controller\UserController;
//Memuat file autoload
require_once('autoload.php');
//Memulai session
session_start();
$loggedUser = $_SESSION['user'];
//Kembali ke halaman login jika session user tidak ada yang artinya dalam kondisi tidak login
if (!isset($loggedUser->username) || (trim($loggedUser->username) == '')) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body>
    <div class="fixed top-0 left-0 w-full z-50 bg-white border-b backdrop-blur-lg bg-opacity-80">
        <div class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8 ">
            <div class="relative flex h-16 justify-between">
                <div class="flex flex-1 items-stretch justify-start">
                    <a class="flex flex-shrink-0 items-center gap-2" href="#">
                        <img class="block h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600">
                        <p class="font-bold">HOMEPAGE</p>
                    </a>
                </div>
                <form method="post" class="flex-shrink-0 flex px-2 py-3 items-center space-x-8">
                    <!-- Input yang disembunyikan ini berguna agar kita bisa menangkap method post logout dengan tepat -->
                    <input name="submit" value="logout" hidden>
                    <button type="submit" class="text-gray-800 bg-indigo-100 hover:bg-indigo-200 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm " href="#">Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
    <main class=" text-2xl font-bold text-slate-600 flex flex-col h-screen justify-center items-center bg-slate-100">
        <div>

            Hai <?php echo $loggedUser->username ?>! Anda sukses login. Sekarang ayo logout karena tidak ada apa-apa disini!
        </div>
        <div class="font-normal text-lg">Daftar user yang tersedia (<?php echo count(UserController::getUsers()) ?>):</div>
        <div class="font-normal text-lg flex justify-center flex-col items-center">
            <!-- Membuat listing daftar user yang tersimpan di database -->
            <?php foreach (UserController::getUsers() as $user) : ?>
                <p>- <?php echo $user->username ?></p>
            <?php endforeach; ?>
        </div>
    </main>
    <?php
    //Karena kita akan memanggil method logout dari kelas UserController
    //maka kita validasi dulu method POST yang dikirim form karena kita tidak menggunakan atribut action dari form
    if ('logout' === ($_POST['submit'] ?? false)) {
        UserController::logout();
    }
    ?>
</body>

</html>