<!DOCTYPE html>
<html lang="en">

<!-- Including the navagation bar at the top of the homepage -->
<?php include '../HTML/nav.php'; ?>

<style>
/* Including the style provided by the css masonry.css */
<?php include '../CSS/masonry.css'; ?>
</style>

<body>
  <!-- Creating the heading Recently Uploaded -->
  <div id="trending">
    
    <div class="container ">
      <div class="row">


        <div class="col-md">
          <hr >
        </div>


        <div class="col-sm-3">
          <h1>recently Updated</h1>
        </div>

        <div class="col-md">
          <hr >
        </div>

      </div>
    </div>
  </div>
    <!-- Creating a class container to display the images uploaded in the recently uploaded category -->
    <div class="container masonry w3-animate-opacity">
      <div class="container">
        <!-- Including the displayImages() method, to pull all the recently uploadeds images -->
        <?php displayImages(); ?>

</div>
</div>


</body>
<!-- Including the footnote at the bottom of the page -->
<?php include_once '../HTML/foot.html'; ?>
</html>
<?php

// Creating the displayImages() function, that will pull all the images uploaded to the recetly uploaded category
function displayImages()
{

  ?>

  <?php
    // for each image in the directory indicated, echo the image with these html embeded style
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