<?php
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'items');
  $sql = "SELECT * FROM `elfbar` WHERE 1";
  $featured = $con->query($sql);
?>
<div class="col-md-2"></div>
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">products Details</h2>
      <?php 
        while ($product = mysqli_fetch_assoc($featured)):
      ?>
      <div class="col-md-5">
        <h4><?= $product['type'];?></h4>
        <h4><?= $product['title'];?></h4>
        <img src="<?= $product['image'];?>" alt="<?= $product['title'];?>"/>
        <p class="lprice">Rs <?= $product['price'];?></p>
        <a href="details.php">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>