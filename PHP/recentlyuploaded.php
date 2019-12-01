<!DOCTYPE html>
<html lang="en">
<?php include '../HTML/nav.php'; ?>

<style>
<?php include '../CSS/masonry.css'; ?>
</style>

<body>

<div style="height:50px"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md">
          <hr class="my-4">
        </div>

        <!-- Contact links -->
        <div class="col-sm-3">
          <h1>Recently Uploaded</h1>
        </div>

        <div class="col-md">
          <hr class="my-4">
        </div>
      </div>
    </div>

<div class="container masonry w3-animate-opacity">
<?php displayImages(); ?>

</div>


</body>
<?php include_once '../HTML/foot.html'; ?>
</html>
<?php

function displayImages()
{

  ?>

  <?php

    $images = glob("Recently Uploaded/*.*");
    foreach ($images as $image) {
      ?>


    <?php
        echo "<div class='item'>";
        echo "<a href='$image' data-lightbox='recent' data-title='Recently Uploaded' data-alt='recentlyuploaded'> ";
        echo "<img src='$image'>";
        echo "</a>";
        echo "</div>"
        ?>



  <?php } ?>
<?php
}

?>