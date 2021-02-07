<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=78")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>201. The Great Physician .</h3>
        <p>The great Physician now is near, The</p>
        <p>sympathizing Jesus, He speaks the</p>
        <p>drooping heart to cheer, Oh, hear the</p>
        <p>voice of Jesus;</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Sweetest note in seraph song,</p>
            <p>Sweetest name on mortal tongue,</p>
            <p>Sweetest carol ever sung,</p>
            <p>Jesus, blessed Jesus.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Your many sins are all forgiven, Oh,</p>
        <p>hear the voice of Jesus; Go on your</p>
        <p>way in peace to heaven, And wear a</p>
        <p>crown with Jesus.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>All glory to the dying Lamb! I now</p>
        <p>believe in Jesus; I love the blessed</p>
        <p>Saviour’s name, I love the name of</p>
        <p>Jesus.</p>
    </div>
    <div style="margin-top:33px;">
        <p>His name dispels my guilt and fear,</p>
        <p>No other name but Jesus; O how my</p>
        <p>soul delights to hear The charming</p>
        <p>name of Jesus.</p>
    </div>

    <!--multicolor circle---->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button--->      
    <div class="previous">
        <a href="song200.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song202.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--javascript--->
    <script src="js/main.js"></script> 

    <!--footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    