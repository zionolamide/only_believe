<!---header--->
<?php 
  include ("layout/header.php");
?>
<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=44")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>31. Standing On The Promises.</h3>            
        <p>Standing on the promises of Christ my</p>
        <p>King, Through eternal ages let His</p>
        <p>praises ring; Glory in the highest I will</p>
        <p>shout and sing, Standing on the</p>
        <p>promises of God.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Standing, standing,</p>
            <p>Standing on the promises of God</p>
            <p>my Saviour,</p>
            <p>Standing, standing,</p>
            <p>I’m standing on the promises of</p>
            <p>God.</p>
                                
    </div>
    <div style="margin-top:33px;">
        <p>Standing on the promises that cannot</p>
        <p>fail, When the howling storms of</p>
        <p>doubt and fear assail, By the living</p>
        <p>Word of God I shall prevail, Standing</p>
        <p>on the promises of God.</p>

        
    </div>
    <div style="margin-top:33px;">
        <p>Standing on the promises I now can</p>
        <p>see Perfect, present cleansing in the</p>
        <p>blood for me; Standing in the liberty</p>
        <p>where Christ makes free, Standing on</p>
        <p>the promises of God.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Standing on the promises of Christ the</p>
        <p>Lord, Bound to Him eternally by</p>
        <p>love’s strong cord, Overcoming daily</p>
        <p>with the Spirit’s sword, Standing on</p>
        <p>the promises of God.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Standing on the promises I cannot fall,</p>
        <p>List’ning every moment to the Spirit’s</p>
        <p>call, Resting in my Saviour, as my all in</p>
        <p>all, Standing on the promises of God.</p>
    </div>
    
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song30.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song32.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script>

    <!---footer---> 
    <?php
    include ("layout/footer.php");
    ?>
</div>
    