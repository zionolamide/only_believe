<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=63")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <!--Song Lyrics-->
    <h3>209. Lord, I'm Coming Home.</h3>
        <p>I’ve wandered far away from God,</p>
        <p>Now I’m coming home; The paths of</p>
        <p>sin too long I’ve trod, Lord, I’m</p>
        <p>coming home.</p>
    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Coming home, coming home,</p>
            <p>Nevermore to roam;</p>
            <p>Open wide Thine arms of love,</p>
            <p>Lord, I’m coming home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>I’ve wasted many precious years, Now</p>
        <p>I’m coming home; I now repent with</p>
        <p>bitter tears, Lord, I’m coming home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>I’m tired of sin and straying, Lord,</p>
        <p>Now I’m coming home; I’ll trust Thy</p>
        <p>love, believe Thy Word, Lord, I’m</p>
        <p>coming home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>My soul is sick, my heart is sore, Now</p>
        <p>I’m coming home; My strength renew,</p>
        <p>my hope restore, Lord, I’m coming</p>
        <p>home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>My only hope, my only plea. Now I’m</p>
        <p>oming home; That Jesus died, and</p>
        <p>died for me. Lord, I’m coming home.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>I need His cleansing blood, I know,</p>
        <p>Now I’m coming home; O wash me</p>
        <p>whiter than the snow, Lord, I’m</p>
        <p>coming home.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button--->      
    <div class="previous">
        <a href="song208.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song210.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer---->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    