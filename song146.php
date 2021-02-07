<!---header--->
<?php 
  include ("layout/header.php");
?>


<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
   
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=7")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>146. At The Cross.</h3>
        <p> Alas! And did my Saviour bleed, And</p>
        <p>did my Sovereign die? Would He</p>
        <p>devote that sacred head For such a</p>
        <p>worm as I?</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus"> Chorus</h3>
            <p>At the cross, at the cross where I</p>
            <p>first saw the light,</p>
            <p>And the burden of my heart rolled</p>
            <p>away,</p>
            <p>It was there by faith I received my</p>
            <p>sight,</p>
            <p>And now I am happy all the day!</p>
            
    </div>
    <div  style="margin-top:33px;">
        <p>Was it for crimes that I have done, He</p>
        <p>groaned upon the tree? Amazing pity,</p>
        <p>grace unknown, And love beyond</p>
        <p>degree!</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Well might the sun in darkness hide,</p>
        <p>And shut his glories in. When Christ,</p>
        <p>the mighty Maker, died For man, the</p>
        <p>creature’s sin.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>But drops of grief can ne’er repay The</p>
        <p>debt of love I owe; Here, Lord, I give</p>
        <p>myself away, ‘Tis all that I can do!</p>
    </div>

    <!----multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song145.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song147.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"> </script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    