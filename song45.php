<!---headeer--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
            <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=68")or die($conn->error());?>
                <?php while($row = $result->fetch_assoc()):?>
                    <?php
                        echo "<audio controls preload='metadata'>";
                            echo "<source src='songs/".$row['audio_name']."'>";
                        echo "</audio>";
                    ?> 
                <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>45. Leaning On The Everlasting Arms.</h3>            
        <p>What a fellowship, what a joy divine,</p>
        <p>Leaning on the everlasting arms; What</p>
        <p>a blessedness, what a peace is mine,</p>
        <p>Leaning on the everlasting arms.</p>


    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>Leaning, leaning,</p>
            <p>Safe and secure from all alarms;</p>
            <p>Leaning, leaning,</p>
            <p>Leaning on the everlasting arms.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Oh, how sweet to walk in this pilgrim</p>
        <p>way, Leaning on the everlasting arms;</p>
        <p>Oh, how bright the path grows from</p>
        <p>day to day, Leaning on the everlasting</p>
        <p>arms</p>
    </div>
    <div style="margin-top:33px;">
        <p>What have I to dread, what have I to</p>
        <p>fear, Leaning on the everlasting arms;</p>
        <p>I have blessed peace with my Lord so</p>
        <p>near, Leaning on the everlasting arms.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song44.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song46.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    