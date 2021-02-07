<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <audio controls preload="metadata" class="">
            <source src="songs/kalimba.mp3" type="audio/ogg">
        </audio>
    </div>

    <!--Song Lyrics-->
    <h3>202. I Must Tell Jesus .</h3>
        <p>I must tell Jesus all of my trials; I</p>
        <p>cannot bear these burdens alone; In</p>
        <p>my distress He kindly will help me; He</p>
        <p>ever loves and cares for His own.</p>       
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>I must tell Jesus! I must tell</p>
            <p>Jesus!</p>
            <p>I cannot bear my burdens alone;</p>
            <p>I must tell Jesus! I must tell</p>
            <p>Jesus!</p>
            <p>Jesus can help me, Jesus alone.</p> 
    </div>
    <div  style="margin-top:33px;">
        <p>I must tell Jesus all of my troubles; He</p>
        <p>is a kind, compassionate Friend; If I</p>
        <p>but ask Him, He will deliver, Make of</p>
        <p>my troubles quickly and end.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Tempted and tried I need a great</p>
        <p>Saviour, One who can help my</p>
        <p>burdens to bear; I must tell Jesus, I</p>
        <p>must tell Jesus; He all my cares and</p>
        <p>sorrows will share.</p>
    </div>
    <div style="margin-top:33px;">
        <p>O how the world to evil allures me! O</p>
        <p>how my heart is tempted to sin! I must</p>
        <p>tell Jesus, and He will help me Over</p>
        <p>the world the vict’ry to win.</p>
    </div>

    <!--multicolor circle---->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song201.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song203.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--javascript--->
    <script src="js/main.js"></script> 

    <!--footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    