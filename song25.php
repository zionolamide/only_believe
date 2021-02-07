<!---header--->
<?php 
  include ("layout/header.php");
?>

<!--css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
  
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=19")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>25. I Surrender All.</h3>            
        <p>All to Jesus I surrender, All to Him I</p>
        <p>freely give; I will ever love and trust</p>
        <p>Him, In His presence daily live.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>I surrender all,</p>
            <p>I surrender all,</p>
            <p>All to Thee, my blessed Saviour,</p>
            <p>I surrender all.</p>
                                
    </div>
    <div style="margin-top:33px;">
        <p>All to Jesus I surrender, Humbly at</p>
        <p>His feet I bow, Worldly pleasures all</p>
        <p>forsaken, Take me, Jesus, take me</p>
        <p>now.</p>
        
    </div>
    <div style="margin-top:33px;">
        <p>All to Jesus I surrender, make me,</p>
        <p>Saviour, wholly Thine; Let me feel the</p>
        <p>Holy Spirit, Truly know that Thou art</p>
        <p>mine.</p>
    </div>
    <div style="margin-top:33px;">
            <p>All to Jesus I surrender, Lord, I give</p>
            <p>myself to Thee; Fill me with Thy love</p>
            <p>and power, Let Thy blessing fall on</p>
            <p>me.</p>
    </div>
    <div style="margin-top:33px;">
        <p>All to Jesus I surrender, Now I feel the</p>
        <p>sacred flame; Oh, the joy of full</p>
        <p>salvation! Glory, glory to His name!</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song24.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song26.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---JAVASCRIPT--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    