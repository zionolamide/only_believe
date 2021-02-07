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
    <h3>207. I See A Crimson Stream.</h3>
        <p>On Calvary’s hill of sorrow Where</p>
        <p>sin’s demands were paid, And rays of</p>
        <p>hope for tomorrow Across our path</p>
        <p>were laid.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>I see a crimson stream of blood.</p>
            <p>It flows from Calvary,</p>
            <p>Its waves which reach the throne</p>
            <p>of God,</p>
            <p>Are sweeping over me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Today no condemnation Abides to</p>
        <p>turn away My soul from His salvation,</p>
        <p>He’s in my heart to stay.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>When gloom and sadness whisper</p>
        <p>You’ve sinned, no use to pray; I look</p>
        <p>away to Jesus And He tells me to say:</p>
    </div>
    <div  style="margin-top:33px;">
        <p>And when we reach the portal Where</p>
        <p>life forever reigns, The ransomed</p>
        <p>hosts grand final Will be this glad</p>
        <p>refrain.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button---->      
    <div class="previous">
        <a href="song206.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song208.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    