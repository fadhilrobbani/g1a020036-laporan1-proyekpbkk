# TUGAS LAPORAN 1 PROYEK PEMROGRAMAN BERBASIS KERANGKA KERJA

- Nama: Fadhilla Ilham Robbani
- NPM: G1A020036
- Kelas: B1

## 1. Jelaskan konsep OOP pada PHP!

OOP atau Object Oriented Programming adalah paradigma pemrograman yang berorientasi kepada objek. OOP bisa digambarkan sebagai berikut:

Misalkan Pesawat adalah contoh objek yang terbentuk dari objek-objek yang lebih kecil, seperti mesin, roda, baling-baling, kursi, dan lain-lain. Objek-objek ini saling berhubungan, berinteraksi, dan berkomunikasi satu sama lain. Begitu juga dengan program, yang merupakan objek yang besar yang dibentuk dari objek-objek yang lebih kecil. Objek-objek dalam program juga saling berkomunikasi dan berkirim pesan satu sama lain.

PHP mendukung OOP sejak versi PHP 5.0. Beberapa konsep OOP yang digunakan di PHP adalah sebagai berikut:

- **Kelas (class)**

Kelas adalah blueprint dari objek. Kelas mendefinisikan atribut dan metode (method) yang dimiliki oleh objek. Kelas didefinisikan menggunakan kata kunci `class`.

Contoh kelas:

```php
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function sayHello() {
        return "My name is $this->name.";
    }
}

```

- **Objek (object)**

Objek adalah instan atau perwujudan dari kelas. Objek dibuat menggunakan kata kunci `new`.

Contoh objek:

```php
$user = new User('Fadhil', 'fadhil@gmail.com');

```

- **Access Modifier**

Access modifier adalah kata kunci yang digunakan untuk mengatur aksesibilitas properti atau metode dalam suatu class oleh bagian-bagian kode lain di dalam atau di luar class tersebut.

PHP memiliki empat access modifier, yaitu:

- **Public:** properti atau metode dapat diakses dari mana saja, baik di dalam maupun di luar class.
- **Protected:** properti atau metode dapat diakses dari dalam class dan oleh kelas turunannya.
- **Private:** properti atau metode hanya dapat diakses dari dalam class.
- **Abstract:** properti atau metode tidak dapat diakses secara langsung, tetapi harus diimplementasikan di kelas turunannya.

Access modifier dapat digunakan untuk meningkatkan keamanan dan keteraturan program. Misalnya, properti atau metode yang bersifat pribadi dapat dilindungi dari akses yang tidak diinginkan.

- **Atribut (attribude)**

Atribut atau bisa disebut juga properti adalah data yang dimiliki oleh objek. Bisa digambarkan juga sebagai ciri-ciri spesifik (data) dari suatu kelas/objek. Atribut dideklarasikan sebagai variabel publik, privat, atau terlindungi.

Contoh atribut:

```php
public $name; //public berarti atribut dapat diakses dari semua kelas lain
private $email; //private berarti atribut hanya dapat diakses dari kelasnya sendiri
protected $age; //protected berarti atribut hanya dapat diakses dari kelasnya sendiri dan turunannya.

```

- **Metode (method)**

Metode adalah fungsi yang dimiliki oleh objek. Metode digunakan untuk memanipulasi data yang ada di dalam objek. Metode atau method juga bisa disebut behavior atau tingkah laku dari suatu kelas atau objek. Jika atribut atau properti merepresentasikan ciri-ciri dari suatu kelas, maka method merepresentasikan tingkah laku atau hal-hal yang kelas tersebut bisa lakukan.

Contoh metode:

```php
public function sayHello() {
    return "Hello, my name is $this->name.";
}

```

- **Constructur**

Konstruktor adalah metode khusus yang dipanggil saat objek dibuat. Konstruktor biasanya digunakan untuk menginisialisasi properti objek.

Dalam PHP, konstruktor harus dideklarasikan dengan nama `__construct()`. Konstruktor dapat memiliki parameter yang digunakan untuk menginisialisasi properti objek.

Berikut adalah contoh kode PHP yang menggunakan konstruktor:

```php
class Student {
  private $firstname;
  private $gender;

  public function __construct($firstname, $gender) {
    $this->firstname = $firstname;
    $this->gender = $gender;
  }
}

$student = new Student("Meena", "Female");
echo $student->firstname; // Menampilkan "Meena"
echo $student->gender; // Menampilkan "Female"


```

Kode di atas mendefinisikan kelas `Student` yang memiliki dua properti, yaitu `firstname` dan `gender`. Konstruktor kelas `Student` memiliki dua parameter, yaitu `firstname` dan `gender`.

Saat objek `student` dibuat, konstruktor `__construct()` dipanggil. Konstruktor `__construct()` menginisialisasi properti `firstname` dan `gender` objek `student` dengan nilai "Meena" dan "Female".

- **Inheritance (pewarisan)**

Inheritance adalah kemampuan objek untuk mewarisi atribut dan metode dari objek lain. Objek yang mewarisi atribut dan metode dari objek lain disebut sebagai subclass. Objek yang diwarisi disebut sebagai superclass.

Contoh inheritance:

PHP

```php
<?php
// Kelas Fruit adalah kelas induk yang mendefinisikan properti dan metode umum untuk semua buah.
class Fruit {
  // Properti name digunakan untuk menyimpan nama buah.
  public $name;
  // Properti color digunakan untuk menyimpan warna buah.
  public $color;

  // Metode __construct() digunakan untuk menginisialisasi properti name dan color.
  public function __construct($name, $color) {
    // Inisialisasi properti name dengan nilai $name.
    $this->name = $name;
    // Inisialisasi properti color dengan nilai $color.
    $this->color = $color;
  }

  // Metode intro() digunakan untuk menampilkan nama dan warna buah.
  public function intro() {
    // Menampilkan nama dan warna buah.
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Kelas Strawberry adalah kelas turunan dari kelas Fruit yang mendefinisikan properti dan metode khusus untuk buah strawberry.
class Strawberry extends Fruit {
  // Metode message() digunakan untuk menampilkan pertanyaan "Am I a fruit or a berry?".
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}

// Objek strawberry adalah objek dari kelas Strawberry yang dibuat dengan nama "Strawberry" dan warna "red".
$strawberry = new Strawberry("Strawberry", "red");

// Metode message() dari objek strawberry dipanggil terlebih dahulu.
$strawberry->message();

// Metode intro() dari objek strawberry dipanggil.
$strawberry->intro();
?>


```

- **Enkapsulasi (encapsulation)**

Enkapsulasi adalah konsep yang digunakan untuk menyembunyikan data dan fungsi dari objek. Enkapsulasi dilakukan dengan menmanfaatkan access modifier pada atribut atau method yang ingin dilindungi. Biasanya jikalau ingin mengakses nilai tersebut dari luar, kita perlu membuat method getter dan setter-nya. Dengan begitu kita bisa membatasi hak akses properti agar lebih aman.

Contoh enkapsulasi:

```php
<?php

class Student {
  // Properti `firstname` dan `gender` dideklarasikan sebagai private.
  private $firstname;
  private $gender;

  // Metode `getFirstName()` digunakan untuk mengembalikan nilai properti `firstname`.
  public function getFirstName() {
    return $this->firstname;
  }

  // Metode `setFirstName()` digunakan untuk menetapkan nilai properti `firstname`.
  public function setFirstName($firstname) {
    // Nilai properti `firstname` disetel ke nilai parameter $firstname.
    $this->firstname = $firstname;
    // Keluaran yang menunjukkan bahwa nilai properti `firstname` telah disetel.
    echo("First name is set to ".$firstname);
    echo("<br>");
  }

  // Metode `getGender()` digunakan untuk mengembalikan nilai properti `gender`.
  public function getGender() {
    return $this->gender;
  }

  // Metode `setGender()` digunakan untuk menetapkan nilai properti `gender`.
  public function setGender($gender) {
    // Validasi input gender.
    if ('Male' !== $gender and 'Female' !== $gender) {
      // Keluaran yang menunjukkan bahwa nilai gender tidak valid.
      echo('Set gender as Male or Female for gender');
    } else {
      // Nilai properti `gender` disetel ke nilai parameter $gender.
      $this->gender = $gender;
      // Keluaran yang menunjukkan bahwa nilai properti `gender` telah disetel.
      echo("Gender is set to ".$gender);
      echo("<br>");
    }
  }
}

$student = new Student();
// Nilai properti `firstname` dari objek $student disetel ke "Meena".
$student->setFirstName('Meena');
// Nilai properti `gender` dari objek $student disetel ke "Female".
$student->setGender('Female');

?>


```

Manfaat penggunaan OOP di PHP adalah sebagai berikut:

- **Kode yang lebih mudah dibaca dan dipahami**
- **Kode yang lebih mudah diuji**
- **Kode yang lebih mudah dimaintain**
- **Kode yang lebih reusable**
- **Kode yang lebih fleksibel**

Berikut adalah beberapa contoh penggunaan OOP di PHP:

- **Membuat model untuk representasi data**
- **Membuat controller untuk menangani permintaan dan respons**
- **Membuat view untuk menampilkan data**
- **Membuat komponen reusable untuk digunakan di seluruh aplikasi**

OOP adalah paradigma pemrograman yang powerful yang dapat digunakan untuk membangun aplikasi web yang kompleks dan fleksibel. Dengan memahami konsep OOP, pengembang dapat menulis kode PHP yang lebih baik.

## 2. Buatlah 4 file PHP wajib OOP dalam 1 folder Contoh form login>tampilan login> isi halaman> logout jelaskan code nya dengan // pada github

(bisa dilihat di folder soal2)
