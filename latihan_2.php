<?php
# Parent Class (Abstract)
abstract class Notifikasi {

    abstract public function kirim();
}

# Child Class
class Email extends Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

class SMS extends Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

class WhatsApp extends Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

# Pemanggilan
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
echo "<br>";

$sms->kirim();
echo "<br>";

$wa->kirim();
?>