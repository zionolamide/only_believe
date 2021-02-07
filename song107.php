<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=24")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>107. In That City, Lamb Is Light.</h3>            
        <p>There’s a country far beyond the starry</p>
        <p>sky, There’s a city where there never</p>
        <p>comes a night; If we’re faithful we</p>
        <p>shall go there by and by, It’s the city</p>
        <p>where the Lamb is the light.</p> 
    <div style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>In that city where the Lamb is the</p>
            <p>light,</p>
            <p>The city where there cometh no</p>
            <p>night</p>
            <p>I’ve a mansion over there, and</p>
            <p>when free from toil and care,</p>
            <p>I am going where the Lamb is the</p>
            <p>light.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Here we have our days of sunshine,</p>
            <p>but we know That the sun which</p>
            <p>shines upon us now so bright Will be</p>
            <p>changed to clouds and rain until we go</p>
            <p>To the City where the Lamb is the</p>
            <p>light.</p>
    </div>
    <div style="margin-top:33px;">
        <p>There the flowers bloom forever and</p> 
        <p>the day Shall be one eternal day</p>
        <p>without a night; And our tears shall be</p>
        <p>forever wiped away, In that city where</p>
        <p>the Lamb is the light.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Here we have our disappointments all</p>
        <p>the while, And our fondest hopes but</p>
        <p>meet with bitter blight; Though by</p>
        <p>night we weep, the morning brings a</p>
        <p>smile, In that city where the Lamb is</p>
        <p>the light.</p> 
    </div>
    <div style="margin-top:33px;">
            <p>Then let sunlight fade, let twilight bring</p>
            <p>its gloom. Not a shadow can my</p>
            <p>blissful soul affright; For I know that</p>
            <p>up in heaven there is room, In that</p>
            <p>city where the Lamb is the light.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song106.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song108.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    