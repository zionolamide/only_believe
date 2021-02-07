<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

   <!---audio song --->
   <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=12")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>181. Got Any Rivers?.</h3>
        <p>“Be of good courage,” God spake</p> 
        <p> unto Joshua, When o’er the river God</p> 
        <p> pointed the way; Jordan uncrossable!</p> 
        <p> Things seemed impossible, Waters</p> 
        <p> divide as they march and obey.</p> 
    <div  style="margin-top:33px;">
        <p>Got any rivers you think are</p> 
        <p>uncrossable?</p> 
        <p>Got any mountains you can’t</p> 
        <p>tunnel through?</p> 
        <p>God specializes in things thought</p> 
        <p>impossible,</p> 
        <p>And He will do what no other</p> 
        <p>power can do.</p> 
    </div>
    <div  style="margin-top:33px;">
        <p>Battles to win! They would meet with</p>
        <p>their obstacles, Jericho’s walls, too,</p>
        <p>must fall to the ground. God never</p>
        <p>failed; He stood back of His promises,</p>
        <p>Walls had to crumble as they marched</p>
        <p>around.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>God is the same and His Word is</p>
        <p>dependable, He’ll make a way through</p>
        <p>the waters for you; Life’s situations by</p>
        <p>Him are amendable. Mountains and</p>
        <p>hills He will part for you too.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song180.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song182.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    