<?php
$username= $_COOKIE['username'];
if($username==""){
    header("Refresh:0; url=giris.php");
  }
$id= $_COOKIE['id'];
$link = mysqli_connect("localhost", "root", "","isim_sifre");
$row = mysqli_query($link,"SELECT * from kartlar1_10 where id=$id")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$result = mysqli_fetch_array($row);
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
echo $result['kart1'];
$row = mysqli_query($link,"SELECT * from kartlar11_20 where id=$id")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$result = mysqli_fetch_array($row);
setcookie("kart11",$result['kart11'],time()+6000);
setcookie("kart12",$result['kart12'],time()+6000);
setcookie("kart13",$result['kart13'],time()+6000);
setcookie("kart14",$result['kart14'],time()+6000);
setcookie("kart15",$result['kart15'],time()+6000);
setcookie("kart16",$result['kart16'],time()+6000);
setcookie("kart17",$result['kart17'],time()+6000);
setcookie("kart18",$result['kart18'],time()+6000);
setcookie("kart19",$result['kart19'],time()+6000);
setcookie("kart20",$result['kart20'],time()+6000);
$row = mysqli_query($link,"SELECT * from kartlar21_30 where id=$id")
or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
$result = mysqli_fetch_array($row);
setcookie("kart21",$result['kart21'],time()+6000);
setcookie("kart22",$result['kart22'],time()+6000);
setcookie("kart23",$result['kart23'],time()+6000);
setcookie("kart24",$result['kart24'],time()+6000);
setcookie("kart25",$result['kart25'],time()+6000);
setcookie("kart26",$result['kart26'],time()+6000);
setcookie("kart27",$result['kart27'],time()+6000);
setcookie("kart28",$result['kart28'],time()+6000);
setcookie("kart29",$result['kart29'],time()+6000);
setcookie("kart30",$result['kart30'],time()+6000);
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