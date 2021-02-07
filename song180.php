<!---header --->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=72")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>180. Close To Thee.</h3>
        <p>Thou, my everlasting portion, More</p>
        <p>than friend or life to me, All along my</p>
        <p>pilgrim journey, Savior, let me walk</p>
        <p>with Thee. Close to Thee, close to</p>
        <p>thee, Close to Thee, close to Thee; All</p>
        <p>along my pilgrim journey, Savior, let</p>
        <p>me walk with Thee.</p>
    <div  style="margin-top:33px;">
        <p>Not for ease or worldly pleasure, Nor</p>
        <p>for fame my prayer shall be; Gladly</p>
        <p>will I toil and suffer, Only let me walk</p>
        <p>with Thee, Close to Thee, close to</p>
        <p>Thee, Close to Thee, close to Thee;</p>
        <p>Gladly will I toil and suffer, Only let</p>
        <p>me walk with Thee.</p>
            
    </div>
    <div  style="margin-top:33px;">
        <p>Lead me through the vale of shadows,</p>
        <p>Bear me o’er life’s fitful sea; Then the</p>
        <p>gate of life eternal May I enter, Lord,</p>
        <p>with Thee. Close to Thee, close to</p>
        <p>Thee, Close to Thee, close to Thee;</p>
        <p>Then the gate of life eternal May I</p>
        <p>enter, Lord, with Thee.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song179.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song181.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js">
    </script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    