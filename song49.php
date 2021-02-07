<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=46")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>49. Some Golden Daybreak.</h3>            
        <p>Some glorious morning sorrow will</p>
        <p>cease, Some glorious morning all will</p>
        <p>be peace; Heartaches all ended,</p>
        <p>schooldays all done, Heaven will open,</p>
        <p>Jesus will come.</p>                     
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>Some golden daybreak, Jesus will</p>
            <p>come;</p>
            <p>Some golden daybreak, battles all</p>
            <p>won,</p>
            <p>He’ll shout the victory, break</p>
            <p>through the blue,</p>
            <p>Some golden daybreak, for me, for</p>
            <p>you.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Sad hearts will gladden, all shall be</p>
        <p>bright, Good-bye forever to earth’s</p>
        <p>dark night; Changed in a moment, like</p>
        <p>Him to be, Oh, glorious daybreak,</p>
        <p>Jesus I’ll see.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Oh, what a meeting, there in the skies,</p>
        <p>No tears nor crying shall dim our eyes;</p>
        <p>Loved ones united eternally, Oh, what</p>
        <p>a daybreak that morn will be.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div> 

    <!---previous and next button--->     
    <div class="previous">
        <a href="song48.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song50.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    