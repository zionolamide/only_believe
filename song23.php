<!--Header--->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
        
    <!--Audio Song-->
    <div class="audio-container">
            <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=30")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>23. My Faith Looks Up TO Thee .</h3>            
        <p>My faith looks up to Thee, Thou</p>
        <p>Lamb of Calvary, Saviour divine;</p>
        <p>Now hear me while I pray, Take all</p>
        <p>my sin away, O let me from this day</p>
        <p>Be wholly Thine!</p>
    <div style="margin-top:33px;">
        <p>May Thy rich grace impart Strength to</p>
        <p>my fainting heart, My zeal inspire; As</p>
        <p>Thou hast died for me, O may my</p>
        <p>love to Thee, Pure, warm, and</p>
        <p>changeless be, A living fire!</p>
                                
    </div>
    <div style="margin-top:33px;">
            <p>While life’s dark maze I tread, And</p>
            <p>griefs around me spread, Be Thou my</p>
            <p>Guide; Bid darkness turn to day,</p>
            <p>Wipe sorrow’s tears away, Nor let me</p>
            <p>ever stray From Thee aside.</p>
    </div>
    
    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
    
    <!---Previous and next button-->
    <div class="previous">
        <a href="song22.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song24.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript-->  
    <script src="js/main.js"></script> 

    <!----Footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    