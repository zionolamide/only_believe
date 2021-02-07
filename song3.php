<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=81")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>3. They Come.</h3>
    <p>They come from the east and west,</p> 
    <p>They come from the land afar,</p> 
    <p>To feast with the king, to dine as his guest,</p>
    <p>How blessed these pilgrims are!</p> 
    <p>Beholding his hallowed face,</p>
    <p>Aglow with light divine</p>
    <p>Blest partakers of his grace</p>
    <p>As gems in his crown to shine.</p>  
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus.</h3>
        <p>Since Jesus has set me free,</p>
        <p>Am happy has heart can be,</p>
        <p>No longer i bear the burden of care,</p>
        <p>His yoke is so sweet to me,</p>
        <p>My soul was has black as night,</p>
        <p>But darkness has taken flight</p>
        <p>Now i shout the victory </p>
        <p>For jesus has set me free.</p>
    </div>
    <div style="margin-top:33px;">
        <p>I look on the great white throne,</p>
        <p>Before it the ransome stand,</p>
        <p>No longer are tears, no sorrow is known,</p>
        <p>Nor death in that goodly land,</p>
        <p>My saviour has gone before,</p>
        <p>Preparing the way for me,</p>
        <p>Soon we'll meet to part no more</p>
        <p>Through time or eternity. </p>
    </div>
    <div style="margin-top:33px;">
        <p>The gate of that holy place,</p>
        <p>Stand open by night and day,</p>
        <p>O look to the lord who giveth more grace,</p>
        <p>Whose love has prepared the way,</p>
        <p>A home in the mansions fair,</p>
        <p>His hand hath reserved for all</p>
        <p>For the wedding feast prepare</p>
        <p>Obeying the gracious call.</p>
    </div>
    <div style="margin-top:33px;">
        <p>O Jesus is coming soon,</p>
        <p>Our trials will then be over,</p>
        <p>What if our lord this moment should come,</p>
        <p>For those who are free from sin?</p>
        <p>Then would it bring you joy,</p>
        <p>Or sorrow and deep despair?</p>
        <p>When our lord in glory comes,</p>
        <p>We'll meet him up in the air.</p>
    </div>

    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
    
    <!---Previous And Next button-->
    <div class="previous">
        <a href="song2.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song4.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!--JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    