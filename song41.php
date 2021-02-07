<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=32")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>41. Wings Of A Dove.</h3>            
        <p>Noah had drifted On the floods many</p>
        <p>days, He searched for land In various</p>
        <p>ways; Troubles he had some, But not</p>
        <p>from above, God gave him His sign</p>
        <p>On the wings of a dove.</p>


    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>On the wings of a snow-white</p>
            <p>dove,</p>
            <p>God sends down His pure, sweet</p>
            <p>love,</p>
            <p>A sign from above,</p>
            <p>On the wings of a dove.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Jesus, our Saviour Came to earth one</p>
        <p>day; He was born in a stable, In a</p>
        <p>manger of hay; Though here rejected,</p>
        <p>But not from above, God gave us His</p>
        <p>sign On the wings of a dove.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Though I have suffered In many a</p>
        <p>way, I cried for healing Both night</p>
        <p>and day; Faith wasn’t forgotten By the</p>
        <p>Father above, He gave me His sign</p>
        <p>On the wings of a dove.</p>
    </div>
      
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song40.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song42.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    