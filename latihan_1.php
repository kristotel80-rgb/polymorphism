<?php
# Interface BangunDatar
interface BangunDatar {

    public function hitungLuas();

}

# Class Persegi
class Persegi implements BangunDatar {

    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

# Class Lingkaran
class Lingkaran implements BangunDatar {

    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return 3.14 * $this->radius * $this->radius;
    }
}

# Class Segitiga
class Segitiga implements BangunDatar {

    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

# Pemanggilan
$persegi = new Persegi(6);
$lingkaran = new Lingkaran(10);
$segitiga = new Segitiga(8, 10);

echo "Luas Persegi: " . $persegi->hitungLuas() . "<br>";
echo "Luas Lingkaran: " . $lingkaran->hitungLuas() . "<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "<br>";

?>