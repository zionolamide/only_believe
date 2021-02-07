<!--header---->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <audio controls preload="metadata" class="">
            <source src="songs/kalimba.mp3" type="audio/ogg">
        </audio>
    </div>

    <!--Song Lyrics-->
    <h3>213.We Work Till Jesus Comes.</h3>
        <p>O land of rest, for thee I sigh! When</p>
        <p>will the moment come When I shall</p>
        <p>lay my armor by, And dwell in peace</p>
        <p>at home?</p>
    <div style="margin-top:3px;">
        <h3 class="chorus">Chorus</h3>
            <p>We’ll work till Jesus comes,</p>
            <p>We’ll work till Jesus comes,</p>
            <p>We’ll work till Jesus comes,</p>
            <p>And we’ll be gathered home!</p>
    </div>
    <div style="margin-top:3px;">
        <p>To Jesus Christ I fled for rest; He bade</p>
        <p>me cease to roam; And lean for succor</p>
        <p>on His breast Till He conduct me</p>
        <p>home?</p>
    </div>
    <div style="margin-top:3px;">
        <p>I sought at once my Saviour’s side, No</p>
        <p>more my steps shall roam; With Him</p>
        <p>I’ll brave death’s chilling tide And</p>
        <p>reach my heavenly home.</p>
    </div>

    <!--Multicolor Circles--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---Previous And Next Button-->      
    <div class="previous">
        <a href="song212.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song214.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---Javascript-->
    <script src="js/main.js"></script> 

    <!---Footer---->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    