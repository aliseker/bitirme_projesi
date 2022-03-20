<?php
$username= $_COOKIE['username'];
$password= $_COOKIE['password'];
$id= $_COOKIE['id'];
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelime Kartları</title>

</head>
<body>
<?php include("ilk10kart.php") ?>


</body>
</html>