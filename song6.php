<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=39")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>6. Oh, How I Love Jesus.</h3>
    <p>There is a name I love to hear, I love</p>
    <p>to sing its worth; It sounds like music</p>
    <p>in mine ear, The sweetest name on</p>
    <p>earth.</p>
    
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus.</h3>  
        <p>Oh, how I love Jesus,</p>
        <p>Oh, how I love Jesus,</p>
        <p>Oh, how I love Jesus,</p>
        <p>Because He first love me.</p>
    </div>
    <div style="margin-top:33px;">
        <p>It tells me of a Saviour’s love, Who</p>
        <p>died to set me free; It tells me of His</p>
        <p>precious blood; The sinner’s perfect</p>
        <p>plea.</p>
    </div>
    <div style="margin-top:33px;">
        <p>It tells me what my Father hath in store</p>
        <p>for every day, And though I tread a</p>
        <p>darksome path, yields sunshine all the</p>
        <p>way.</p>
    </div>
    <div style="margin-top:33px;">
        <p>It tells of One whose loving heart Can</p>
        <p>feel my deepest woe, Who in each</p>
        <p>sorrow bears a part, That none can</p>
        <p>bear below.</p>
    </div>
    
    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--Previous And next button-->      
    <div class="previous">
        <a href="song5.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song7.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--JavaScript-->     
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    