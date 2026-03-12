<?php
// Abstract class sebagai parent
// Berisi method hitungLuas tetapi belum memiliki isi
abstract class BangunDatar {
    abstract public function hitungLuas();
}

// Child class Persegi
class Persegi extends BangunDatar {
    public $sisi;

    // untuk mengisi nilai sisi
    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    // method untuk menghitung luas persegi
    public function hitungLuas() {
        echo "Luas Persegi = " . ($this->sisi * $this->sisi);
    }
}

// Child class Lingkaran
class Lingkaran extends BangunDatar {
    public $radius;

    // constructor untuk mengisi jari-jari lingkaran
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // menghitung luas lingkaran
    public function hitungLuas() {
        echo "Luas Lingkaran = " . (3.14 * $this->radius * $this->radius);
    }
}

// Child class Segitiga
class Segitiga extends BangunDatar {
    public $alas;
    public $tinggi;

    // untuk mengisi nilai alas dan tinggi
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // untuk menghitung luas segitiga
    public function hitungLuas() {
        echo "Luas Segitiga = " . (0.5 * $this->alas * $this->tinggi);
    }
}

// Membuat object
$persegi = new Persegi(6);
$lingkaran = new Lingkaran(10);
$segitiga = new Segitiga(8, 10);

// Memanggil method
$persegi->hitungLuas();
echo "<br>";

$lingkaran->hitungLuas();
echo "<br>";

$segitiga->hitungLuas();
?>