<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=35")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>77. Turn Your Eyes Upon Jesus .</h3>            
        <p>O soul, are you weary and troubled?</p>
        <p>No light in the darkness you see?</p>
        <p>There’s light for a look at the Saviour,</p>
        <p>And life more abundant and free!</p>
    <div style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>Turn your eyes upon Jesus,</p>
            <p>Look full in His wonderful face;</p>
            <p>And the things of earth will grow</p>
            <p>strangely dim</p>
            <p>In the light of His glory and grace.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Through death into life everlasting He</p>
        <p>passed, and we follow Him there;</p>
        <p>Over us sin no more hath dominion,</p>
        <p>For more than conqu’rors we are!</p>
    </div>
    <div style="margin-top:33px;">
        <p>His Word shall not fail you, He</p>
        <p>promised; Believe Him, and all will be</p>
        <p>well; Then go to a world that is dying,</p>
        <p>His perfect salvation to tell!</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song76.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song78.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    