<!--Header-->
<?php 
 include ("layout/header.php");
?>

<!--css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
                
        <!--Audio Song-->
        <div class="audio-container">
            <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=53")or die($conn->error());?>
                <?php while($row = $result->fetch_assoc()):?>
                    <?php
                        echo "<audio controls preload='metadata'>";
                            echo "<source src='songs/".$row['audio_name']."'>";
                        echo "</audio>";
                    ?> 
                <?php endwhile; ?>   
        </div>

        <!--Song Lyrics-->
        <h3>18. Onward, Christian Soldier.</h3>            
            <p>Onward Christian soldiers! Marching</p>
            <p>as to war, With the cross of Jesus</p>
            <p>Going on before; Christ, the royal</p>
            <p>Master, Leads against the foe;</p>
            <p>Forward into battle, See, His banners</p> 
            <p>go!</p>         
        <div style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
                <p>Onward, Christian soldiers!</p>
                <p>Marching as to war,</p>
                <p>With the cross of Jesus</p>
                <p>Going on before.</p>
                            
        </div>
        <div style="margin-top:33px;">
                <p>Like a mighty army Moves the Church</p>
                <p>of God; Brothers, we are treading</p>
                <p>Where the saints have trod; We are</p>
                <p>not divided, All one body we: One in</p>
                <p>hope and doctrine, One in charity.</p> 
            
        </div>
        <div style="margin-top:33px;">
            <p>Crowns and thrones may perish,</p>
            <p>Kingdoms rise and wane; But the</p>
            <p>Church of Jesus Constant will remain;</p>
            <p>Gates of hell can never ‘Gainst that</p>
            <p>church prevail; We have Christ’s own</p>
            <p>promise, Which can never fail.</p>
            
        </div>
        <div style="margin-top:33px;">
            <p>At the sign of triumph, Satan’s host</p>
            <p>doth flee; Oh, then Christian soldiers,</p>
            <p>On to victory! Hell’s foundations</p>
            <p>quiver At the shout of praise;</p>
            <p>Brothers, lift your voices, Loud your</p>
            <p>anthems raise!</p>
        </div>
        <div style="margin-top:33px;">
            <p>Onward, then, ye people! Join our</p>
            <p>happy throng; Blend with ours your</p>
            <p>voices In the triumph song; Glory,</p>
            <p>laud, and honor, Unto Christ the King;</p>
            <p>This through countless ages Men and</p>
            <p>angels sing.</p>
        </div>
        
    
        <!--Multicolor Circle-->          
        <div class="outer2">

        </div> 
        <div class="outer1">

        </div>
        
        <!--Previous And Next Button-->
        <div class="previous">
            <a href="song17.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
        </div> 
        <div class="next">
            <a href="song19.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
        </div>
        
        <!--Javascript-->
        <script src="js/main.js"></script> 

        <!--Footer-->
        <?php
        include ("layout/footer.php");
        ?>
</div>
    