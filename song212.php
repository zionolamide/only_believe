<!---Header--->
<?php 
  include ("layout/header.php");
?>

<!--Css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <audio controls preload="metadata" class="">
            <source src="songs/kalimba.mp3" type="audio/ogg">
        </audio>
    </div>

    <!--Song Lyrics-->
    <h3>212. I Believe God.</h3>
        <p>I believe God! I believe God! It shall</p>
        <p>be done, even as He said; Trust and</p>
        <p>obey, look up and say, I believe, I</p>
        <p>believe God.</p>

    <!--multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--Previous and next Button--->      
    <div class="previous">
        <a href="song211.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song213.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---Javascript-->
    <script src="js/main.js"></script> 

    <!--footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    