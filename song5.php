<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=43")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>5. Sweet Hour Of Prayer.</h3>
    <p>Sweet hour of prayer, sweet hour of</p>
    <p>prayer, That calls me from a world of</p>
    <p>care, And bids me, at my Father’s</p>
    <p>throne, Make all my wants and wishes</p>
    <p>known; In seasons of distress and</p>
    <p>grief, My soul has often found relief,</p>
    <p>And oft escaped the tempter’s snare,</p>
    <p>By thy return, sweet hour of prayer.</p>

    <div style="margin-top:33px;">
        <p>Sweet hour of prayer, sweet hour of</p>
        <p>prayer, The joy I feel, the bliss I share,</p>
        <p>Of those whose anxious spirits burn</p>
        <p>With strong desires for thy return!</p>
        <p>With such I hasten to the place Where</p>
        <p>God, my Saviour, shows His face,</p>
        <p>And gladly take my station there, And</p>
        <p>wait for thee, sweet hour of prayer.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Sweet hour of prayer, sweet hour of</p>
        <p>prayer, Thy wings shall my petition</p>
        <p>bear To Him whose truth and</p>
        <p>faithfulness Engage the waiting soul to</p>
        <p>bless; And since He bids me seek His</p>
        <p>face, Believe His Word and trust His</p>
        <p>grace, I’ll cast on Him my every care,</p>
        <p>And wait for thee, sweet hour of prayer.</p> 
    </div>
    
    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
    
    <!--Previous And Next Button-->
    <div class="previous">
        <a href="song4.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song6.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    