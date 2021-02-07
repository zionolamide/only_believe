<!--Header-->
<?php 
  include ("layout/header.php");
?>
<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=60")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>220. Blest Be The Tie That Binds.</h3>
        <p>Blest be the tie that binds Our hearts</p>
        <p>in Christian love; The fellowship of</p>
        <p>kindred minds Is like to that above.</p>
    <div style="margin-top:33px;">
        <p>Before our Father’s throne, We pour</p>
        <p>our ardent prayers; Our fears, our</p>
        <p>hopes, our aims are one, Our</p>
        <p>comforts and our cares.</p>           
    </div>
    <div style="margin-top:33px;">
        <p>We share our mutual woes, Our</p>
        <p>mutual burdens bear; And often for</p>
        <p>each other flows The sympathizing</p>
        <p>tear.</p>
    </div>
    <div style="margin-top:33px;">
        <p>When we asunder part, It gives us</p>
        <p>inward pain; But we shall still be</p>
        <p>joined in heart, And hope to meet</p>
        <p>again.</p>
    </div>
    
    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div> 
    <!--Previous And Next Button-->     
    <div class="previous">
        <a href="song219.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song221.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    