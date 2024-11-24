<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Yükleme</title>
</head>
<body>

<?php
// Dosya yükleme sınırlarını artırmak
ini_set('upload_max_filesize', '100M'); // Maksimum dosya boyutu 100MB
ini_set('post_max_size', '100M');       // POST verisinin maksimum boyutu 100MB
ini_set('max_execution_time', '300');   // Maksimum çalışma süresi 300 saniye

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Yükleme klasörünün var olup olmadığını kontrol et, yoksa oluştur
    $hedef_klasor = "uploads/";
    if (!is_dir($hedef_klasor)) {
        mkdir($hedef_klasor, 0777, true);
    }

    // Hedef dosya yolu
    $hedef_dosya = $hedef_klasor . basename($_FILES["fileToUpload"]["name"]);

    // Dosyayı yüklemeye çalış
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $hedef_dosya)) {
        echo "Dosya başarıyla yüklendi: <a href='" . $hedef_dosya . "'>" . $hedef_dosya . "</a>";
    } else {
        echo "Dosya yüklenirken bir hata oluştu.";
    }
}
?>

<!-- Dosya yükleme formu -->
<form method="post" enctype="multipart/form-data">
    Yüklemek için bir dosya seçin:
    <input type="file" name="fileToUpload" id="fileToUpload" required>
    <input type="submit" value="Yükle" name="submit">
</form>

</body>
</html>
