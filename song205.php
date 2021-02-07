<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=65")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>205. Near The Cross.</h3>
        <p>Jesus, keep me near the cross, There a</p>
        <p>precious fountain, Free to all, a healing</p>
        <p>stream, Flows from Calv’ry’s</p>
        <p>mountain.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>In the cross, in the cross,</p>
            <p>Be my glory ever;</p>
            <p>Till my raptured soul shall find</p>
            <p>Rest beyond the river. </p>
    </div>
    <div  style="margin-top:33px;">
        <p>Near the cross, a trembling soul, Love</p>
        <p>and mercy found me; There the Bright</p>
        <p>and Morning Star Sheds its beams</p>
        <p>around me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Near the cross! O lamb of God, Bring</p>
        <p>its scenes before me; Help me walk</p>
        <p>from day to day, With its shadows o’er</p>
        <p>me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Near the cross I’ll watch and wait,</p>
        <p>Hoping, trusting, ever. Till I reach the</p>
        <p>golden strand, Just beyond the river.</p>
    </div>
    
    <!---multicolor circle --->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button----->
    <div class="previous">
        <a href="song204.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song206.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!--footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    