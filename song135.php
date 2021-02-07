<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=17")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>135. How Great Thou Art .</h3>
        <p>O Lord my God! When I in awesome</p>
        <p> wonder. Consider all the worlds Thy</p>
        <p>hands have made; I see the stars, I</p>
        <p>hear the rolling thunder, Thy pow’r</p>
        <p>throughout the universe displayed.</p>

    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Then sings my soul, my Saviour</p>
            <p>God to Thee;</p>
            <p>How great Thou art, how great</p>
            <p>Thou art!</p>
            <p>Then sings my soul, my Saviour</p>
            <p>God to Thee;</p>
            <p>How great Thou art, how great</p>
            <p>Thou art!</p>
    </div>
    <div  style="margin-top:33px;">
        <p>When through the woods and forest</p>
        <p>glades I wander And hear the birds</p>
        <p>sing sweetly in the trees; When I look</p>
        <p>down from lofty mountain grandeur</p>
        <p>And hear the brook and feel the gentle</p>
        <p>breeze.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>And when I think that God, His Son</p>
        <p>not sparing. Sent Him to die, I scarce</p>
        <p>can take it in; That on the cross, my</p>
        <p>burden gladly bearing, He bled and</p>
        <p>died to take away my sin.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>When Christ shall come with shout of</p>
        <p>acclamation And take me home, what</p>
        <p>joy shall fill my heart! Then I shall bow</p>
        <p>in humble adoration And there</p>
        <p>proclaim, my God, how great Thou art!</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song134.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song136.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script>

    <!---footer---> 
    <?php
    include ("layout/footer.php");
    ?>
</div>
    