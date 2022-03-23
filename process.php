<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
//MySQL veritabanına giriş. ----

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  

  $link = mysqli_connect("localhost", "root", "","isim_sifre");
  $result = mysqli_query($link,"SELECT * from users where username = '$username' ")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
// -----------

  $row = mysqli_fetch_array($result);
  if ($row['username'] == $username){
    echo "Seçtiğiniz kullanıcı adı alınmış lütfen başka bir kullanıcı adı seçin";
    header("Refresh: 3; url=kaydol.php");
  }
  else{
    $sql= "INSERT INTO users (username, password)
    VALUES ('$username', '$password')";
    if (mysqli_query($link, $sql)) {
      echo '<div class="alert alert-success alert-dismissible w-75 show m-5" role="alert">
      <strong>&emsp;Hesabın Başarıyla oluşturuldu!</strong>&emsp;Şimdi ingilizce öğrenmen için seni anasayfaya ışınlıyorum bol şans çekirge!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    setcookie("username",$username,time()+6000);
    $result = mysqli_query($link,"select id from users where username = '$username' ")
    or die("Veritabanına eylem yapılırken gelen hata: ".mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $id=$row['id'];
    $result = mysqli_query($link,"INSERT INTO kartlar1_10 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar11_20 (id) VALUES ('$id')");
    $result = mysqli_query($link,"INSERT INTO kartlar21_30 (id) VALUES ('$id')");
    setcookie("id",$id,time()+6000);
    header("Refresh: 2; url=index.php");
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
      header("Refresh: 2; url=kaydol.php");
    }
  }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
