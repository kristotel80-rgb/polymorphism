<?php
# Interface Notifikasi
interface Notifikasi {
    public function kirim();
}

# Implementasi Class
class Email implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

class SMS implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

# Membuat object
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

# Pemanggilan
$email->kirim();
echo "<br>";
$sms->kirim();
echo "<br>";
$wa->kirim();
?>