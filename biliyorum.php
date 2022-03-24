<?php
$username= $_COOKIE['username'];
$id= $_COOKIE['id'];
$kart1 = $_COOKIE['kart1'];
$kart2 = $_COOKIE['kart2'];
$kart3 = $_COOKIE['kart3'];
$kart4 = $_COOKIE['kart4'];
$kart5 = $_COOKIE['kart5'];
$kart6 = $_COOKIE['kart6'];
$kart7 = $_COOKIE['kart7'];
$kart8 = $_COOKIE['kart8'];
$kart9 = $_COOKIE['kart9'];
$kart10 = $_COOKIE['kart10'];
$kart11 = $_COOKIE['kart11'];
$kart12 = $_COOKIE['kart12'];
$kart13 = $_COOKIE['kart13'];
$kart14 = $_COOKIE['kart14'];
$kart15 = $_COOKIE['kart15'];
$kart16 = $_COOKIE['kart16'];
$kart17 = $_COOKIE['kart17'];
$kart18 = $_COOKIE['kart18'];
$kart19 = $_COOKIE['kart19'];
$kart20 = $_COOKIE['kart20'];
$kart21 = $_COOKIE['kart21'];
$kart22 = $_COOKIE['kart22'];
$kart23 = $_COOKIE['kart23'];
$kart24 = $_COOKIE['kart24'];
$kart25 = $_COOKIE['kart25'];
$kart26 = $_COOKIE['kart26'];
$kart27 = $_COOKIE['kart27'];
$kart28 = $_COOKIE['kart28'];
$kart29 = $_COOKIE['kart29'];
$kart30 = $_COOKIE['kart30'];


if(isset($_POST['iknow1'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart1=$kart1+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart1_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow2'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart2=$kart2+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart2_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow3'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart3=$kart3+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart3_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow4'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart4=$kart4+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart4_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow5'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart5=$kart5+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart5_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow6'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart6=$kart6+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart6_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow7'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart7=$kart7+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart7_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow8'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart8=$kart8+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart8_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow9'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart9=$kart9+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart9_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow10'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart10=$kart10+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart10_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow11'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart11=$kart11+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart11_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow12'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart12=$kart12+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart12_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow13'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart13=$kart13+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart13_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow14'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart14=$kart14+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart14_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow15'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart15=$kart15+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart15_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow16'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart16=$kart16+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart16_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow17'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart17=$kart17+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart17_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow18'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart18=$kart18+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart18_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow19'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart19=$kart19+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart19_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow20'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar11_20 SET kart20=$kart20+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart20_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow21'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart21=$kart21+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart21_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow22'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart22=$kart22+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart22_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow23'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart23=$kart23+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart23_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow24'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart24=$kart24+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart24_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow25'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart25=$kart25+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart25_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow26'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart26=$kart26+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart26_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow27'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart27=$kart27+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart27_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow28'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart28=$kart28+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart28_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow29'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart29=$kart29+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart29_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow30'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar21_30 SET kart30=$kart30+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    setcookie("kart30_iknow",1,time()+6000);
    echo "<script>window.location='kartlar.php'</script>";}
?>