<?php
  //  include ("layout/header.php");
?>
<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta http-equiv="refresh" content="2; message.php">
<!-- Bootstrap CSS -->
<link rel="stylesheet" text="text/css" href="styles/index.css"> 
<style>

}
</style>
</head>
<body>

<div class="container">

    <?php 
    include ("db_conn/conn.php");
    $result = mysqli_query($conn, "SELECT * FROM image WHERE id=1")or die($conn->error());?>
      <?php while($row = $result->fetch_assoc()):?>
          <?php
              echo "<div id='img_div'>";
                  echo "<img src='images/".$row['img']."' style='width: 100%; height:100%;'>";
              echo "</div>";
          ?> 
      <?php endwhile; ?>    
<!-- <img src="images/554737.jpg" alt="554737" style="width: 100%; height:99%;"> -->
  <div class="row">
    <div class="column"></div>
      <div class="column">
          <div class="content">
              <h3 style=" text-align:center; ">Only Believe Hymn</h3>
          </div>
      </div>
    <div class="column"></div>
  </div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_image_transparent_bottom by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:09:40 GMT -->
</html>


































     