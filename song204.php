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
    <h3>204. What A Day That Will Be.</h3>
        <p>There is coming a day when no</p>
        <p>heartaches shall come, No more</p>
        <p>clouds in the sky, no more tears to dim</p>
        <p>the eye; All is peace forevermore on</p>
        <p>that happy golden shore, What a day,</p>
        <p>glorious day that will be.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>What a day that will be when my</p>
            <p>Jesus I shall see,</p>
            <p>And I look upon His face, the</p>
            <p>One who saved me by His grace;</p>
            <p>When He takes me by the hand,</p>
            <p>and leads me through the</p>
            <p>Promised Land,</p>
            <p>What a day, glorious day that will</p>
            <p>be.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>There’ll be no sorrow there, no more</p>
        <p>burdens to bear, No more sickness, no</p>
        <p>pain, no more parting over there; And</p>
        <p>forever I will be with the One who</p>
        <p>died for me, What a day, glorious day</p>
        <p>that will be.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button---->      
    <div class="previous">
        <a href="song203.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song205.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer---->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    