<?php

// Mendefinisikan namespace `Controller`
namespace Controller;

use Utils\Database;

class UserController
{
    // Method `getUsers()` yang mengembalikan daftar objek User
    //Kita masukkan data users dari kelas Database;
    public static function getUsers()
    {
        return Database::users();
    }

    //Method 'getUsersByUsername()' mengembalikan satu objek user yang sesuai, jika tidak return null
    public static function getUserByUsername($username)
    {
        //Menggunakan looping untuk iterasi tiap user
        foreach (self::getUsers() as $user) {
            //Membandingkan antara username di database dan username dari parameter
            if ($user->username == $username) {
                //Jika sesuai maka kembalikan objek user
                return $user;
            }
        }
        //Jika tidak terdapat kecocokan username, maka kembalikan null
        return null;
    }

    // Method `login()` untuk melakukan proses login
    public static function login()
    {

        //Mengecek apakah username terdaftar di database
        $user = self::getUserByUsername($_POST['username']);
        //Jika tidak maka kembalikan respon gagal dan return untuk menghentikan method
        if (is_null($user)) {
            $_SESSION['message'] = 'User not registered. Please register before login (Contact to admin)';
            return;
        }

        //Jika iya maka lakukan pengecekan untuk password
        if ($user->password == $_POST['password']) {
            //Jika password benar maka kirim session user dan message kalau login sukses
            $_SESSION['user'] = $user;
            $_SESSION['message'] = 'Login success';

            // Redirect ke halaman home.php
            header('Location: /home.php');
            exit();
        } else {
            //Jika password salah maka kirimkan session message kalau login gagal
            $_SESSION['message'] = 'Login failed. Please try again';
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
