<!---Header--->
<?php 
  include ("layout/header.php");
?>

<!---Css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=40")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>214. The Windows Of Heaven.</h3>
        <p>The windows of Heaven are open,</p>
        <p>The blessings are falling tonight,</p>
        <p>There’s joy, joy, joy in my heart, For</p>
        <p>Jesus makes everything right; I gave</p>
        <p>Him my old tattered garment, He gave</p>
        <p>me a robe of pure white, I’m feasting</p>
        <p>today on the Manna, And that’s why</p>
        <p>I’m happy tonight.</p>
    <!--Multicolor Circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--Previous And Next Button--->      
    <div class="previous">
        <a href="song213.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song215.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--Javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
        include ("layout/footer.php");
    ?>
</div>
    