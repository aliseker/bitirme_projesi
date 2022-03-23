<?php
$username= $_COOKIE['username'];
if($username==""){
    header("Refresh:0; url=giris.php");
  }
$id= $_COOKIE['id'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelime Kartları</title>

</head>
<body>

<?php
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

?>
<?php include_once("header.php");?>
<?php include_once("ilk10kart.php") ?>
<?php
if(isset($_POST['iknow1'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart1=$kart1+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow2'])){
	$link = mysqli_connect("localhost", "root", "","isim_sifre");
	$row = mysqli_query($link,"UPDATE kartlar1_10 SET kart2=$kart2+1 where id=$id")
	or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
	echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow3'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart3=$kart3+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow4'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart4=$kart4+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow5'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart5=$kart5+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow6'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart6=$kart6+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow7'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart7=$kart7+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow8'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart8=$kart8+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow9'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart9=$kart9+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow10'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart10=$kart10+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow11'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart11=$kart11+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow12'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart12=$kart12+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow13'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart13=$kart13+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow14'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart14=$kart14+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow15'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart15=$kart15+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow16'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart16=$kart16+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow17'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart17=$kart17+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow18'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart18=$kart18+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow19'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart19=$kart19+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow20'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart20=$kart20+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow21'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart21=$kart21+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow22'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart22=$kart22+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow23'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart23=$kart23+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow24'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart24=$kart24+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow25'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart25=$kart25+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow26'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart26=$kart26+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow27'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart27=$kart27+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow28'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart28=$kart28+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow29'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart29=$kart29+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
if(isset($_POST['iknow30'])){
    $link = mysqli_connect("localhost", "root", "","isim_sifre");
    $row = mysqli_query($link,"UPDATE kartlar1_10 SET kart30=$kart30+1 where id=$id")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    echo "<script>window.location='kartlar.php'</script>";}
?>
</body>
</html>