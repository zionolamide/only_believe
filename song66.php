<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
   
   <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=48")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>66. Shine On Me.</h3>            
        <p>Shine on me, Lord, shine on me, Let</p>
        <p>the Light from the lighthouse shine on</p>
        <p>me; Shine on me, Lord, shine on me,</p>
        <p>Let the light from the lighthouse shine</p>
        <p>on me.</p> 

    <!---multicolor circle--->            
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div> 

    <!---previous and next button--->     
    <div class="previous">
        <a href="song65.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song67.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

     <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    