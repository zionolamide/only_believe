<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=4")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>51. Glory To His Name.</h3>            
        <p>Down at the cross where my Saviour</p>
        <p>died, Down where for cleansing from</p>
        <p>sin I cried; There to my heart was the</p>
        <p>blood applied; Glory to His name!</p>      
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>Glory to His name!</p>
            <p>Glory to His name!</p>
            <p>There to my heart was the blood</p>
            <p>applied;</p>
            <p>Glory to His name!</p>
    </div>
    <div style="margin-top:33px;">
            <p>I am so wondrously saved from sin,</p>
            <p>Jesus so sweetly abides within, There</p>
            <p>at the cross where He took me in:</p>
            <p>Glory to His name!</p>
    </div>
    <div style="margin-top:33px;">
        <p>O, precious fountain that saves from</p> 
        <p>sin! I am so glad I have entered in;</p>
        <p>There Jesus saves me and keeps me</p>
        <p>clean; Glory to His name!</p>
    </div>
    <div style="margin-top:33px;">
        <p>Come, to this fountain so rich and</p>
        <p>sweet; Cast thy poor soul at the</p>
        <p>Saviour’s feet; Plunge in today, and be</p>
        <p>made complete; Glory to His name!</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song50.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song52.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    