<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=2")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
 
    <!--Lyrics-->
    <h3>2. Amazing Grace.</h3>
    <p>Amazing grace! how sweet the sound,</p> 
    <p>That save a wretch like me,</p> 
    <p>I once was lost, but now am found,</p>
    <p>was blind, but now i see.</p> 
    <div style="margin-top:33px;">     
        <p>Twas grace that taught my heart to fear,</p>
        <p>And grace my fear relieved.</p>
        <p>How precious did  that grace appear,</p>
        <p>The hour i first believed.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Through many danger, toils and snares,</p>
        <p>I have already come,</p>
        <p>Tis grace hath brought me safe thus far,</p>
        <p>And grace will lead me home.</p>
    </div>
    <div style="margin-top:33px;">
        <p>When we've been there ten thousand years,</p>
        <p>Bright shining as a sun,</p>
        <p>We've no less days to sing God's praise,</p>
        <p>Than when we first begun.</p>
    </div>
    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
    
    <!--Previous And Next Button-->
    <div class="previous">
        <a href="song1.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song3.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--Javascript-->
    <script src="js/main.js"></script> 
    <script>
   function modifyState() {
       let stateObj = { id: "100" };
       window.history.replaceState(stateObj,
                    "song 1", "song1.php");
   }
   </script>
    <!--Footer-->
    <?php
      include ("layout/footer.php");
    ?>
</div>
    