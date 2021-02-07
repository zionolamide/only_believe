<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=64")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>206. Pass Me Not.</h3>
        <p>Pass me not, O gentle Saviour, Hear</p>
        <p>my humble cry; While on others Thou</p>
        <p>art smiling, Do not pass me by.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Saviour, Saviour,</p>
            <p>Hear my humble cry;</p>
            <p>While on others Thou art calling,</p>
            <p>Do not pass me by.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Let me at Thy throne of mercy Find a</p>
        <p>sweet relief; Kneeling there in deep</p>
        <p>contrition, Help my unbelief.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Trusting only in Thy merit, Would I</p>
        <p>seek Thy face; Heal my wounded,</p>
        <p>broken spirit, Save me by Thy grace.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Thou the Spring of all my comfort,</p>
        <p>More than life to me. Whom have I</p>
        <p>on earth beside Thee? Whom in</p>
        <p>heaven but Thee?</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button--->      
    <div class="previous">
        <a href="song205.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song207.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript---->
    <script src="js/main.js"></script> 

    <!---footer---->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    