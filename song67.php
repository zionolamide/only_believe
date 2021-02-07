<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!---audio song--->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=37")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>67. To Be Like Him.</h3>            
        <p>From Bethlehem’s manger came forth</p>
        <p>a Stranger. On earth I long to be like</p>
        <p>Him; My faithful Saviour, how rich</p>
        <p>His favor! On earth I long to be like</p>
        <p>Him.</p>  
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>To be like Jesus, to be like Jesus,</p>
            <p>On earth I long to be like Him;</p>
            <p>All thru life’s journey from earth</p>
            <p>to glory</p>
            <p>I only ask to be like Him.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Serene and holy, obedient, lowly, On</p>
            <p>earth I long to be like Him. By grace</p>
            <p>forgiven, an heir of heaven, On earth I</p>
            <p>long to be like Him.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>  

    <!---previous and next button--->    
    <div class="previous">
        <a href="song66.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song68.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    