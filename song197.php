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
    <h3>197.There's A Great Day Coming.</h3>
        <p>There’s a great day coming, a great day</p>
        <p>coming, There’s a great day coming by</p>
        <p>and by, When the saints and the</p>
        <p>sinners shall be parted right and left,</p>
        <p>Are you ready for that day to come?</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Are you ready? Are you ready?</p>
            <p>Are you ready for the judgment</p>
            <p>day?</p>
            <p>Are you ready? Are you ready?</p>
            <p>For the judgment day?</p>
    </div>
    <div  style="margin-top:33px;">
        <p>There’s a bright day coming, a bright</p>
        <p>day coming, There’s a bright day</p>
        <p>coming by and by, But its brightness</p>
        <p>shall only come to them that love the</p>
        <p>Lord, Are you ready for that day to</p>
        <p>come?</p>              
    </div>
    <div  style="margin-top:33px;">
        <p>There’s a sad day coming, a sad day</p>
        <p>coming, There’s a sad day coming by</p>
        <p>and by, When the sinner shall hear his</p>
        <p>doom, “Depart, I know ye not,” Are</p>
        <p>you ready for that day to come?</p>
    </div>
    
    <!--multicolor circle---->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button--->      
    <div class="previous">
        <a href="song196.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song198.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!--footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    