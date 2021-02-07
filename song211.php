<!---header--->
<?php 
  include ("layout/header.php");
?>

<!--css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=62")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>211. Jesus Paid It All.</h3>
        <p>I hear the Savior say, “Thy strength</p>
        <p>indeed is small, Child of weakness,</p>
        <p>watch and pray, Find in Me thine all in</p>
        <p>all.”</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Jesus paid it all.</p> 
            <p>All to Him I owe;</p> 
            <p>Sin had left a crimson stain;</p> 
            <p>He washed it white as snow.</p> 
    </div>
    <div  style="margin-top:33px;">
        <p>Lord, now indeed I find Thy pow’r,</p>
        <p>and Thine alone, Can change the</p>
        <p>leper’s spots, And melt the heart of</p>
        <p>stone.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Since nothing good have I Whereby</p>
        <p>Thy grace to claim, I’ll wash my</p>
        <p>garments white In the blood of</p>
        <p>Calv’ry’s Lamb.</p>
    </div>

    <!--multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---Previous and next button---> 
    <div class="previous">
        <a href="song210.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song212.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--javascript--->
    <script src="js/main.js"></script> 

    <!--Footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    