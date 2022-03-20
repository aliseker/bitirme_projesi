
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
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
<style>
body {
  background-color: #044572;
}

.wrapper {
  margin: 10vh;
}

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}
@media (max-width: 768px) {
  .card {
    min-height: 350px;
  }
}
@media (max-width: 420px) {
  .card {
    min-height: 300px;
  }
}
.card.card-has-bg {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size: 120%;
  background-repeat: no-repeat;
  background-position: center center;
}
.card.card-has-bg:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);
}
.card.card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
  background-size: 130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card.card-has-bg:hover .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: #234f6d;
  background: linear-gradient(0deg, rgba(4, 69, 114, 0.5) 0%, #044572 100%);
}
.card .card-footer {
  background: none;
  border-top: none;
}
.card .card-footer .media img {
  border: solid 3px rgba(234, 95, 0, 0.3);
}
.card .card-meta {
  color: orange;
}
.card .card-body {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card:hover .card-body {
  margin-top: 30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: #234f6d;
  background: linear-gradient(0deg, rgba(35, 79, 109, 0.3785889356) 0%, #455f71 100%);
}
.form{
  display: inline-grid;
  grid-template-columns: auto auto;
  column-gap: 1rem;

}
#check{
  display: none;
}
</style>
</head>
<body>
<div class="alert alert-info alert-dismissible w-75 show m-5" role="alert">
    <i class="bi bi-info-circle-fill"></i><strong class="primary">&emsp;DİKKAT!</strong>&emsp;Kelime kartlarının arkasındaki resimler rastgeledir. Biraz kafa karıştırıcı değil mi? :)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<section class="wrapper">
  <div class="container">
  <div class="row">
    <div id="kart1" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Selamlaşma</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Hello my friend, how are you?</a></h4>
            <h1 class="card-title mt-5">Hello</h1>

          </div>
          <form action="kartlar.php" method="POST" class="form">
              <i id="check" class="bi bi-check2" style="display: none;"></i>
              <input type="submit" id="iknow1" onclick="myFunction()" value="Biliyorum" name="iknow1" class="btn btn-success">
              <input type="submit" id="idk1" value="Öğren" name="idk1" class="btn btn-danger">
          </form>
        </div>
      </div>
    </div>
    <div id="kart2" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Selamlaşma</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
          </div>
        </div>
      </div>
    </div>
    <div id="kart3" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Selamlaşma</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
          </div>

        </div>
    </div>
  
</div>
</section>


<script>
function myFunction(){
    alert($kart1);
}



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>