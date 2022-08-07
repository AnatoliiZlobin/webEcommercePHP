<?php
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'items');
  $sql = "SELECT * FROM `elfbar` WHERE 1";
  $featured = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELFBAR.UA</title>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top " style="background-color: black">

<nav class="container-xxl">
    <div class="container-fluid d-flex justify-content-start" >
      <img src="image/Untitled.png" class="navbar-brand" href="#" style="padding-top: 0px; padding-bottom: 0px; width:120px"/>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="container-fluid d-flex justify-content-center" >
    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav ">
        <li class="nav-item col-6 col-lg-auto">
          <a class="nav-link py-2 px-0 px-lg-2"  role="button" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item col-6 col-lg-auto">
          <a class="nav-link" role="button" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item col-6 col-lg-auto">
          <a class="nav-link active">New</a>
        </li>
      </ul>
    </div>
    <div class="container-fluid d-flex justify-content-end" >
    <button type="button" class="btn btn-primary align-bottom justify-content-end">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
      </button>
    </div>
</nav>
</header>


<div class="col-md-2"></div>

<div class="container w-50">
  <div class="row">
    <h2 class="text-center">TopProducts</h2><br><br>
      <?php 
        while ($product = mysqli_fetch_assoc($featured)):
      ?>

      <div class="card" style="width: 18rem; padding: 0rem;">
        <img class="card-img-top" src="<?= $product['image'];?>" alt="<?= $product['title'];?>"/>
        <div class="card-body">
        <h4><?= $product['type'];?></h4>
        <p class="card-text"><?= $product['title'];?></p>
        <a href="#" class="btn btn-primary"><?= $product['price'];?> UAH</a>
        </div>
      </div>


      <?php endwhile; ?>
    </div>

</div>

</body>
</html>