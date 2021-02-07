<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=51")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>38. Draw Me Nearer.</h3>            
    <p>I am Thine, O Lord, I have heard Thy</p>
    <p>voice, And it told Thy love to me; But</p>
    <p>I ling to rise in the arms of faith, And</p>
    <p>be closer drawn to Thee.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>Draw me nearer, nearer, blessed</p>
            <p>Lord,</p>
            <p>To the cross where Thou hast</p>
            <p>died;</p>
            <p>Draw me nearer, nearer, nearer,</p>
            <p>blessed Lord,</p>   
            <p>To Thy precious bleeding side.</p>           
    </div>
    <div style="margin-top:33px;">
        <p>Consecrate me now to Thy service,</p>
        <p>Lord, By the pow’r of grace divine;</p>
        <p>Let my soul look up with a steadfast</p>
        <p>hope, And my will be lost in Thine.</p>       
    </div>
    <div style="margin-top:33px;">
        <p>Oh, the pure delight of a single hour</p>
        <p>That before Thy throne I spend,</p>
        <p>When I kneel in prayer, and with Thee,</p>
        <p>my God, I commune as friend with</p>
        <p>friend.</p>
    </div>
    <div style="margin-top:33px;">
        <p>There are depths of love that I cannot</p>
        <p>know, Till I cross the narrow sea,</p>
        <p>There are heights of joy that I may not</p>
        <p>reach, Till I rest in peace with Thee.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song37.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song39.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
            
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    