<?php
$username= $_COOKIE['username'];
$password= $_COOKIE['password'];
if($username==""){
    header("Location: giris.php");
}
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
<?php echo "Hoşgeldiniz $username"; ?>
<script>
    var cookie_string = document.cookie;
    //string ifadeyi ';' ifadesine göre parçalıyoruz ve diziye ceviriyoruz. Dizide 'cerez_ismi=cerez_degeri' seklinde depolaniyorlar 
    var cerezler = document.cookie.split(";");
    for (var i = 0; i < cerezler.length; i++) { //dizi icerisinde donuyoruz 
        var cookiePair = cerezler[i].split("="); //'cerez_ismi=cerez_degeri' seklindeki verileri '=' ifadesine gore parcaliyoruz ve cerez_degeri degiskenine aktariyoruz
        if("username" == cookiePair[0].trim()) { //isminin 'cerez ismi' olup olmadigini kontrol ediyoruz. Esitse 
            document.getElementById("ProfilAdi").innerHTML = cookiePair[1];//alert(cookiePair[1]); //cerezin degerini ekrana yazdiriyoruz 
        }
}
    
    document.getElementById("ProfilAdi").innerHTML = username;
</script>
</body>
</html>