<?php
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'items');
  $sql = "SELECT * FROM `elfbar` WHERE 1";
  $featured = $con->query($sql);
  $row = $featured->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid w-50 text-center">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <a class="navbar-brand" style="margin: 0;" href="#">ELFBAR.UA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </ul>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" role="button" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="button" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">New</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
      <button type="button" class="btn btn-primary align-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
      </button>
      </ul>
  </div>
</nav>

<div class="col-md-2">

</div>

<div class="col-md-8">
  <div class="row">
    <h2>TopProducts</h2><br><br>
    <div class="col-md-5">
      <?php
      echo 'Today’s date is <b>' . date('Y/m/d') . '</b> and it’s a <b>'.date('l').'</b> today!';
      ?>
      <?php
      $let = $featured->num_rows;
      echo $let;
      echo "id-: " . $row["id"] . $row["title"] . $row["price"];
      ?>
    </div>
  </div>
</div>

</body>
</html>