<?php include "db.php"; ?>
<form method="POST">
  Ürün Adı: <input type="text" name="urun_ad"><br>
  Kategori ID: <input type="number" name="kategori_id"><br>
  Fiyat: <input type="text" name="fiyat"><br>
  Stok: <input type="number" name="stok"><br>
  <input type="submit" name="ekle" value="Ürünü Ekle">
</form>

<?php
if (isset($_POST["ekle"])) {
    $ad = $_POST["urun_ad"];
    $kid = $_POST["kategori_id"];
    $fiyat = $_POST["fiyat"];
    $stok = $_POST["stok"];
    
    $sorgu = "CALL UrunEkle('$ad', $kid, $fiyat, $stok)";
    if ($baglanti->query($sorgu)) {
        echo "Ürün başarıyla eklendi.";
    } else {
        echo "Hata: " . $baglanti->error;
    }
}
?>
