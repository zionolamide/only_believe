<!--Header-->
<?php 
  include ("layout/header.php");
?>
<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=41")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>222. Take The Name Of Jesus.</h3>
        <p>Take the name of Jesus with you,</p>
        <p>Child of sorrow and o f woe; It will</p>
        <p>joy and comfort give you, Take it,</p>
        <p>then, where’er you go.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Precious name, O how sweet!</p>
            <p>Hope of earth and joy of Heaven;</p>
            <p>Precious name, O how sweet!</p>
            <p>Hope of earth and joy of Heaven.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Take the name of Jesus ever, As a</p>
        <p>shield from every snare; If temptations</p>
        <p>round you gather, Breathe that holy</p>
        <p>name in prayer.</p>
    </div>
    <div style="margin-top:33px;">
        <p>O the precious name of Jesus! How it</p>
        <p>thrills our souls with joy, When His</p>
        <p>loving arms receive us, And His songs</p>
        <p>our tongues employ!</p>
    </div>

    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div> 

    <!--Previous and Next Button-->     
    <div class="previous">
        <a href="song221.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song1.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    