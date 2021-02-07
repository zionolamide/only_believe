<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=42")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <!---song lyrics--->
    <h3>164. Swing low, Sweet Chariot.</h3>
        <p>I looked over Jordan and what did I</p>
        <p>see Coming for to carry me home; A</p>
        <p>band of angels coming after me,</p>
        <p>Coming for to carry me home.</p>
    <div  style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>Swing low, sweet chariot,</p>
            <p>Coming for to carry me home;</p>
            <p>Swing low, sweet chariot,</p>
            <p>Coming for to carry me home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>If you get there before I do, Coming</p>
        <p>for to carry me home; Tell all my</p>
        <p>friends I’m a-coming too, Coming for</p>
        <p>to carry me home.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div> 

    <!---previous and next button--->     
    <div class="previous">
        <a href="song163.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song165.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    