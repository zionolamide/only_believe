<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

   <!---audio song--->
   <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=47")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>179. Softly And Tenderly.</h3>
        <p> Softly and tenderly Jesus is calling,</p>
        <p>Calling for you and for me, See on the</p>
        <p>portals He’s waiting and watching,</p>
        <p>Watching for you and for me.</p>
    <div  style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>come home, come home,</p>
            <p>Ye who are wary, come home;</p>
            <p>Earnestly, tenderly, Jesus is</p>
            <p>calling,</p>
            <p>Calling, O sinner, come home!</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Why should we tarry when Jesus is</p>
        <p>pleading, Pleading for you and for me?</p>
        <p>Why should we linger and head not</p>
        <p>His mercies, Mercies for you and for</p>
        <p>me?</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Time is now fleeting, the moments are</p>
        <p>passing, Passing from you and from</p>
        <p>me; Shadows are gathering, death’s</p>
        <p>night is coming, Coming for you and</p>
        <p>for me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Oh! For the wonderful love He has</p>
        <p>promised, Promised for you and for</p>
        <p>me; Though we have sinned, He has</p>
        <p>mercy and pardon, Pardon for you</p>
        <p>and for me.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song178.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song180.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    