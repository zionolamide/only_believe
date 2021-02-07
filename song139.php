<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=14")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>139. He Abides .</h3>
        <p>I’m rejoicing night and day, As I walk</p>
        <p>the pilgrim way, For the hand of God</p>
        <p>in all my life I see, And the reason of</p>
        <p>my bliss, Yes, the secret all is this;</p>
        <p>That the Comforter abides with me.</p>
    
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>He abides,</p>
            <p>He abides,</p>
            <p>Hallelujah, He abides with me!</p>
            <p>I’m rejoicing night and day,</p>
            <p>As I walk the narrow way,</p>
            <p>For the Comforter abides with me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Once my heart was full of sin. Once I</p>
        <p>had no peace within, Till I heard how</p>
        <p>Jesus died upon the tree; Then I fell</p>
        <p>down at His feet, And there came a</p>
        <p>peace so sweet, Now the Comforter</p>
        <p>abides with me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>He is with me everywhere, And He</p>
        <p>knows my every care, I’m as happy as</p>
        <p>a bird and just as free; For the Spirit</p>
        <p>has control, Jesus satisfies my soul,</p>
        <p>Since the Comforter abides with me!</p>
    </div>
    <div  style="margin-top:33px;">
        <p>There’s no thirsting for the things Of</p>
        <p>the world, they’ve taken wings; Long</p>
        <p>ago I gave them up, and instantly All</p>
        <p>my night was turned to day, All my</p>
        <p>burdens rolled away, Now the</p>
        <p>Comforter abides with me!</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song138.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song140.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    