<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">

   <!---audio song--->
   <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=31")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>167. The Old Rugged Cross .</h3>
        <p>On a hill far away stood an old rugged</p>
        <p>cross, The emblem of suff’ring and</p>
        <p>shame, And I love that old cross</p>
        <p>where the Dearest and Best, For a</p>
        <p>world of lost sinners was slain.</p>
    <div  style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>So I’ll cherish the old rugged</p>
            <p>cross,</p>
            <p>Till my trophies at last I lay down;</p>
            <p>I will cling to the old rugged</p>
            <p>cross,</p>
            <p>And exchange it some day for a</p>
            <p>crown. </p>     
    </div>
    <div  style="margin-top:33px;">
        <p>Oh, that old rugged cross, so despised</p>
        <p>by the world, Has a wondrous</p>
        <p>attraction for me; For the dear Lamb</p>
        <p>of God left His glory above, To bear it</p>
        <p>to dark Calvary.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>In the old rugged cross, stained with</p>
        <p>blood so divine, A wondrous beauty I</p>
        <p>see. For ‘twas on that old cross Jesus</p>
        <p>suffered and died, To pardon and</p>
        <p>sanctify me.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>To the old rugged cross I will ever be</p>
        <p>true, Its shame and reproach gladly</p>
        <p>bear; Then He’ll call me some day to</p>
        <p>my home far away, Where His glory</p>
        <p>forever I’ll share.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song166.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song168.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script>

    <!---footer---> 
    <?php
    include ("layout/footer.php");
    ?>
</div>
    