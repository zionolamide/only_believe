<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---Css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=28")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>93. The Love Of God.</h3>            
        <p>The love of God is greater far Than</p>
        <p>tongue or pen can ever tell; It goes</p>
        <p>beyond the highest star, And reaches</p>
        <p>to the lowest hell. The guilty pair,</p>
        <p>bowed down with care, God gave His</p>
        <p>son to win; His erring child He</p>
        <p>reconciled, And pardoned from his</p>
        <p>sin.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Oh, love God, how rich and pure!</p>
            <p>How measureless and strong!</p>
            <p>It shall forevermore endure,</p>
            <p>The saints and angels song.</p>
    </div>
    <div style="margin-top:33px;">
        <p>When hoary time shall pass away, And</p>
        <p>earthly thrones and kingdoms fall;</p>
        <p>When men who here refuse to pray,</p>
        <p>On rocks and hill and mountains call;</p>
        <p>God’s love, so sure, shall still endure,</p>
        <p>All measureless and strong;</p>
        <p>Redeeming grace to Adam’s race, The</p>
        <p>saint’ and angels’ song.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Could we with ink the ocean fill, And</p>
            <p>were the skies of parchment made;</p>
            <p>Were every stalk on earth a quill, And</p>
            <p>every man a scribe by trade; To write</p>
            <p>the love of God above Would drain</p>
            <p>the ocean dry; Nor could the scroll</p>
            <p>contain the whole, Though stretched</p>
            <p>from sky to sky.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song92.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song94.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    