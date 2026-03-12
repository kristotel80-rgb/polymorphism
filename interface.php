<?php
#Contoh Implementasi Interface
interface Pembayaran {

public function prosesPembayaran();

}

#Contoh Implementasi Class
class TransferBank implements Pembayaran {

    public function prosesPembayaran () {
        echo "Pembayaran melalui Transfer Bank";
    }

}

class Ewallet implements Pembayaran {

    public function prosesPembayaran () {
        echo "Pembayaran melalui E-wallet";
    }

}

class KartuKredit implements Pembayaran {

    public function prosesPembayaran () {
        echo "Pembayaran melalui Kartu Kredit";
    }

}

#Contoh Pemanggilan 
$pembayaran1 = new TransferBank();
$pembayaran2 = new EWallet();
$pembayaran3 = new KartuKredit();

$pembayaran1->prosesPembayaran();
echo "<br>";

$pembayaran2->prosesPembayaran();
echo "<br>";

$pembayaran1->prosesPembayaran();
?>