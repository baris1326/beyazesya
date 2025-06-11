<?php
$baglanti = new mysqli("localhost", "root", "", "beyazesya");
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
?>
