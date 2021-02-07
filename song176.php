<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=71")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>176. Blessed Assurance.</h3>
        <p>Blessed assurance, Jesus is mine! Oh,</p>
        <p>what a foretaste of glory divine! Heir</p>
        <p>of salvation, purchased of God. Born</p>
        <p>of His Spirit, washed in His Blood.</p>
    <div  style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>This is my story, this is my song,</p>
            <p>Praising my Savior all the day</p>
            <p>long;</p>
            <p>This is my story, this is my song,</p>
            <p>Praising my Savior all the day long.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Perfect submission, perfect delight,</p>
        <p>Visions of rapture now burst on my</p>
        <p>sight; Angels descending, bring from</p>
        <p>above Echoes of mercy, whispers of</p>
        <p>love.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Perfect submission, all is at rest, I in</p>
        <p>my Savior am happy and blest;</p>
        <p>Watching and waiting, looking above,</p>
        <p>Filled with His goodness, lost in His</p>
        <p>love.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---prevous and next button--->      
    <div class="previous">
        <a href="song175.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song177.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    