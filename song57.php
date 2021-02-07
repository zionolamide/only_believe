<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---CSs--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

   <!---audio song--->
   <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=8")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>57. Battle Hyms Of Republic.</h3>            
        <p>Mine eyes have seen the glory of the</p>
        <p>coming of the Lord; He is trampling</p>
        <p>out the vintage where the grapes of</p>
        <p>wrath are stored; He hath loosed the</p>
        <p>fateful lightning of His terrible swift</p>
        <p>sword; His truth is marching on.</p> 
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Glory! glory, hallelujah!</p>
            <p>Glory! glory, hallelujah!</p>
            <p>Glory! glory, hallelujah!</p>
            <p>His Truth is marching on.</p>
    </div>
    <div style="margin-top:33px;">
        <p>I have seen Him in the watchfires of a</p>
        <p>hundred circling camps; They have</p>
        <p>builded Him an altar in the evening</p>
        <p>dews and damps; I can read His</p>
        <p>righteous sentence by the dim and</p>
        <p>flaring lamps; His day is marching on.</p>
    </div> 
    <div style="margin-top:33px;">
        <p>He has sounded forth the trumpet that</p>
        <p>shall never sound retreat; He is sifting</p>
        <p>out the hearts of men before His</p>
        <p>judgment seat; O be swift, my soul, to</p>
        <p>answer Him! Be jubilant, my feet! Our</p>
        <p>God is marching on.</p>
    </div> 
    <div style="margin-top:33px;">
        <p>In the beauty of the lilies Christ was</p>
        <p>born across the sea, With a glory in</p>
        <p>His bosom that transfigures you and</p>
        <p>me; As He died to make men holy, let</p>
        <p>us die to make men free; While God is</p>
        <p>marching on.</p>
    </div>    

    <!---multicolor circle--->  
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song56.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song58.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    