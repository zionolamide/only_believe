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
    <h3>200. I'm Bound For The Promise Land.</h3>
        <p>On Jordan’s stormy banks I stand,</p>
        <p>And cast a wishful eye, Toward</p>
        <p>Canaan’s fair and happy land, Where</p>
        <p>my possessions lie.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>I am bound for the promised</p> 
            <p>land,</p> 
            <p>I am bound for the promised</p> 
            <p>land;</p> 
            <p>O who will come and go with me?</p> 
            <p>I am bound for the promised land.</p> 
    </div>
    <div  style="margin-top:33px;">
        <p>O’er all those wide extended plains</p>
        <p>Shines one eternal day; There God the</p>
        <p>Son forever reigns, And scatters night</p>
        <p>away.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>No chilling winds, nor pois’nous</p>
        <p>breath, Can reach that healthful shore;</p>
        <p>Sickness and sorrow, pain and death,</p>
        <p>Are feared and felt no more.</p>
    </div>
    <div style="margin-top:33px;">
        <p>When shall I reach that happy place,</p>
        <p>And be forever blest! When shall I see</p>
        <p>my Father’s face, And in His bosom</p>
        <p>rest?</p>
    </div>

    <!--multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song199.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song201.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    