<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=25")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>35. Love Lifted Me.</h3>            
        <p>I was sinking deep in sin, Far from the</p>
        <p>peaceful shore, Very deeply stained</p>
        <p>within, Sinking to rise no more; But</p>
        <p>the Master of the sea, Heard my</p>
        <p>despairing cry, From the waters lifted</p>
        <p>me, Now safe am I.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Love lifted me! Love lifted me!</p>
            <p>When nothing else could help,</p>
            <p>love lifted me.</p>
            <p>Love lifted me! Love lifted me!</p>
            <p>When nothing else could help, love</p>
            <p>lifted me.</p>                 
    </div>
    <div style="margin-top:33px;">
        <p>All my heart to Him I give, Ever to</p>
        <p>Him I’ll cling, In His blessed presence</p>
        <p>live, Ever His praises sing. Love so</p>
        <p>mighty and so true, Merits my soul’s</p>
        <p>best songs; Faithful, loving service,</p>
        <p>too, To Him belongs.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Souls in danger, look above, Jesus</p>
            <p>completely saves; He will lift you by</p>
            <p>His love, Out of the angry waves,</p>
            <p>He’s the Master of the sea, Billows His</p>
            <p>will obey; He your Saviour wants to</p>
            <p>be; Be saved today.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song34.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song36.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 
    
    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    