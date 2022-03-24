<?php
$username= $_COOKIE['username'];
if($username==""){
    header("Refresh:0; url=giris.php");
  }
$id= $_COOKIE['id'];

?>
<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico"/>
</head>
<body>



</body>
</html>