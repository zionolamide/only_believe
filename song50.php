<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=49")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>50. Shall  We Gather At The River.</h3>            
            <p> Shall we gather at the river, Where</p>
            <p>bright angel feet have trod, With its</p>
            <p>crystal tide forever, Flowing by the</p>
            <p>throne of God? </p>          
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
        <p>Yes, we’ll gather at the river,</p>
        <p>The beautiful, the beautiful river;</p>
        <p>Gather with the saints at the river</p>
        <p>That flows by the throne of God.</p>
    </div>
    <div style="margin-top:33px;">
        <p> On the bosom of the river, Where the</p>
        <p>Saviour-King we own, We shall meet</p>
        <p>and sorrow never, ‘Neath the glory of</p>
        <p>the throne.</p>
    </div>
    <div style="margin-top:33px;">
            <p>On the margin of the river, Washing</p>
            <p>up its silver spray, We will walk and</p>
            <p>worship ever, All the happy, golden</p>
            <p>day.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Ere we reach the shining river, Lay we</p>
        <p>every burden down; Grace our spirits</p>
        <p>will deliver, And provide a robe and</p>
        <p>crown.</p> 
    </div>
    <div style="margin-top:33px;">
            <p>At the smiling of the river, Mirror of</p>
            <p>the Saviour’s face, Saints whom death</p>
            <p>will never sever Lift their songs of</p>
            <p>saving grace.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Soon we’ll reach the shining river,</p>
            <p>Soon our pilgrimage will cease; Soon</p>
            <p>our happy hearts will quiver With the</p>
            <p>melody of peace.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>  

    <!---previous and next button--->    
    <div class="previous">
        <a href="song49.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song51.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    