<?php
$username= $_COOKIE['username'];
$id= $_COOKIE['id'];
$link = mysqli_connect("localhost", "root", "","isim_sifre");
$row = mysqli_query($link,"SELECT * from kartlar1_10 where id=$id")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$result = mysqli_fetch_array($row);
echo $result["kart1"];
setcookie("kart1",$result['kart1'],time()+6000);
setcookie("kart2",$result['kart2'],time()+6000);
setcookie("kart3",$result['kart3'],time()+6000);
setcookie("kart4",$result['kart4'],time()+6000);
setcookie("kart5",$result['kart5'],time()+6000);
setcookie("kart6",$result['kart6'],time()+6000);
setcookie("kart7",$result['kart7'],time()+6000);
setcookie("kart8",$result['kart8'],time()+6000);
setcookie("kart9",$result['kart9'],time()+6000);
setcookie("kart10",$result['kart10'],time()+6000);
?>

<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>



</body>
</html>