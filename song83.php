<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=79")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <h3>83. The Lily Of The Valley.</h3>            
        <p>I’ve found a friend in Jesus, He’s</p>
        <p>everything to me. He’s the fairest of</p>
        <p>ten thousand to my soul; The Lily of</p>
        <p>the Valley in Him alone I see, All I</p>
        <p>need to cleanse and make me fully</p>
        <p>whole. In sorrow He’s my comfort, in</p>
        <p>trouble He’s my stay, He tells me</p>
        <p>every care on Him to roll. Hallelujah!</p>
        <p>He’s the Lily of the Valley, the Bright</p>
        <p>and Morning Star. He’s the fairest of</p>
        <p>ten thousand to my soul.</p>
    <div style="margin-top:33px;">
        <p>He all my griefs has taken, and all my</p>
        <p>sorrows borne; In temptation He’s my</p>
        <p>strong and mighty tow’r; I have all for</p>
        <p>Him forsaken, and all my idols torn</p>
        <p>From my heart, and now He keeps me</p>
        <p>by His power. Though all the world</p>
        <p>forsake me, and Satan tempt me sore,</p>
        <p>Through Jesus I shall safely reach the</p>
        <p>goal. Hallelujah! He’s the Lily of the</p>
        <p>Valley, the Bright and Morning Star,</p>
        <p>He’s the fairest of ten thousand to my</p>
        <p>soul.</p>
    </div>
    <div style="margin-top:33px;">
            <p>He’ll never, never leave me, nor yet</p>
            <p>forsake me here, While I live by faith</p>
            <p>and do His blessed will; A wall of fire</p>
            <p>about me, I’ve nothing now to fear;</p>
            <p>With His manna He my hungry soul</p>
            <p>shall fill. Then sweeping up to glory,</p>
            <p>we’ll see His blessed face, Where rivers</p>
            <p>of delight shall ever roll. Hallelujah!</p>
            <p>He’s the Lily of the Valley, the Bright</p>
            <p>and morning Star, He’s the fairest of</p>
            <p>ten thousand to my soul.</p>
    </div>
    <div class="outer2">

    </div> 
    <div class="outer1">

        </div>      
    <div class="previous">
        <a href="song82.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song84.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
            
             
        <!-- </div> -->
        <!-- <div class="column">
            
        </div>
        <div class="column">

        </div> -->
    <!-- </div> -->



<script src="js/main.js">
</script> 
<?php
  include ("layout/footer.php");
?>
</div>
    