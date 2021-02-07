<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=55")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>44. God Leads Us Along.</h3>            
        <p>In shady, green pastures, so rich and so</p>
        <p>sweet, God leads His dear children</p>
        <p>along; Where the water’s cool flow</p>
        <p>bathes the weary one’s feet, God leads</p>
        <p>His dear children along.</p>


    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>Some through the waters, some</p>
            <p>through the flood.</p>
            <p>Some through the fire, but all</p>
            <p>through the Blood;</p>
            <p>Some through great sorrow, but</p>
            <p>God gives a song,</p>
            <p>In the night season and all the day</p>
            <p>long.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Sometimes on the mount where the</p>
        <p>sun shines so bright, God leads His</p>
        <p>dear children along; Sometimes in the</p>
        <p>valley in the darkest of night, God</p>
        <p>leads His dear children along.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Tho’ sorrows befall us, and Satan</p>
        <p>oppose, God leads His dear children</p>
        <p>along; Through grace we can conquer,</p>
        <p>defeat all our foes, God leads his dear</p>
        <p>children along.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Away from the mire, and away from</p>
        <p>the clay, God leads His dear children</p>
        <p>along; Away up in glory, eternity’s day,</p>
        <p>God leads His dear children along.</p> 
    </div>
    
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song43.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song45.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    