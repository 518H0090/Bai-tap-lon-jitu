<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .carousel{
    display: block;
    width: 25%;
    height: auto;
  }

  </style>
<?php
include("showImage.php");
?>
<body>

<div class="jumbotron text-center p-3 my-3 bg-dark text-white">
  <h1>Home</h1>
</div>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="Home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Search.php">Find Manga</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ProInfo.php">About Me</a>
  </li>
</ul>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/fb826fc05ba7ec97598861ad76f38669.jpg" alt="Peerless Dad" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Peerless Dad</h3>
        <p>Manhwa</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Image/mairimashita-iruma-kun-raw.jpg" alt="Iruma-Kun" width="1100" height="500">
      <div class="carousel-caption">
        <h3>mairimashita-iruma-kun-raw</h3>
        <p>Manga</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Image/961cd08284add95214878c3f07d36e51_small.jpg" alt="Grand Blue" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Grand Blue</h3>
        <p>Manga</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>