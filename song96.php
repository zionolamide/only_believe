<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
  <!--Audio Song-->
  <div class="audio-container">
    <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=74")or die($conn->error());?>
        <?php while($row = $result->fetch_assoc()):?>
            <?php
                echo "<audio controls preload='metadata'>";
                    echo "<source src='songs/".$row['audio_name']."'>";
                echo "</audio>";
            ?> 
        <?php endwhile; ?>   
  </div>

  <!---song lyrics--->
  <h3>96. Holy, Holy, Holy.</h3>            
      <p>Holy, Holy, Holy, Lord God of hosts.</p>
      <p>Heaven and earth are full of Thee,</p>
      <p>Heaven and earth are praising Thee, O</p>
      <p>Lord Most High.</p>

  <!---multicolor circle--->
  <div class="outer2">

  </div> 
  <div class="outer1">

  </div>

  <!---previous and next button--->      
  <div class="previous">
      <a href="song95.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
  </div> 
  <div class="next">
      <a href="song97.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
  </div>
  
  <!---javascript--->
  <script src="js/main.js"></script> 

  <!---footer--->
  <?php
    include ("layout/footer.php");
  ?>
</div>
    