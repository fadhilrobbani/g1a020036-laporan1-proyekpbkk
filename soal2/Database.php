<?php

namespace Utils; // Mendefinisikan namespace untuk kelas Database

use Model\User; // Mengimpor kelas User dari namespace Model

//Karena kita tidak menggunakan database sungguhan, jadi kita gunakan kelas Database sebagai contoh data
class Database
{
    // Metode statis yang mengembalikan daftar objek User
    public static function users()
    {
        // Mengembalikan sebuah array yang berisi tiga objek User
        return [
            new User('fadhil', 'password'),    // Objek User dengan username 'fadhil' dan password 'password'
            new User('patrick', 'star'),      // Objek User dengan username 'patrick' dan password 'star'
            new User('squidwood', 'tenpoles') // Objek User dengan username 'squidwood' dan password 'tenpoles'
        ];
    }
}
