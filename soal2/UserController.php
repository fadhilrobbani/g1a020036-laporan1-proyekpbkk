<?php

// Mendefinisikan namespace `Controller`
namespace Controller;

// Mengimpor kelas `User` dari namespace `Model`
use Model\User;

class UserController
{
    // Method `getUsers()` yang mengembalikan daftar objek User
    //Kita masukkan User secara langsung karena kita tidak menggunakan database
    public static function getUsers()
    {
        return [
            new User('fadhil', 'password'),
            new User('patrick', 'star'),
            new User('squidwood', 'tenpoles')
        ];
    }

    // Method `login()` untuk melakukan proses login
    public static function login()
    {
        // Memanggil method `getUsers()` untuk mendapatkan daftar pengguna
        $users = self::getUsers();

        // Iterasi melalui daftar pengguna
        foreach ($users as $user) {
            // Memeriksa apakah username dan password yang dikirimkan melalui POST cocok dengan salah satu pengguna
            if ($_POST['username'] == $user->username && $_POST['password'] == $user->password) {
                // Jika cocok, simpan username pengguna dalam session dan set pesan sukses
                $_SESSION['user'] = $user;
                $_SESSION['message'] = 'login success';

                // Redirect ke halaman home.php
                header('Location: /home.php');
                exit();
            } else {
                // Jika tidak cocok, set pesan login gagal
                $_SESSION['message'] = 'login failed';
            }
        }
    }

    // Method `logout()` untuk melakukan proses logout
    public static function logout()
    {
        // Mulai sesi, hapus sesi, dan redirect ke halaman index.php
        session_start();
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
