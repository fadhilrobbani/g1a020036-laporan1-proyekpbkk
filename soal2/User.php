<?php

// Mendefinisikan namespace `Model`
namespace Model;

// Mendefinisikan kelas `User`
class User
{
    // Mendefinisikan properti `username` yang merupakan tipe data string
    public string $username;

    // Mendefinisikan properti `password` yang merupakan tipe data string
    public string $password;

    // Mendefinisikan method `__construct()` (konstruktor) untuk kelas `User`
    public function __construct($username, $password)
    {
        // Konstruktor menerima dua parameter, `$username` dan `$password`.

        // Menyimpan nilai `$username` yang diterima sebagai argumen konstruktor
        // pada properti `username` milik objek yang sedang dibuat
        $this->username = $username;

        // Menyimpan nilai `$password` yang diterima sebagai argumen konstruktor
        // pada properti `password` milik objek yang sedang dibuat
        $this->password = $password;
    }
}
