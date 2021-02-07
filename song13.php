<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
     
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=29")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <!--Song Lyrics-->
    <h3>13. Marvelous Grace.</h3>            
        <p>marvelous grace of our loving Lord,</p>
        <p>Grace that exceeds our sin and our</p>
        <p>guilt Yonder on Calvary’s mount</p>
        <p>outpoured, There where the Blood of</p>
        <p>the Lamb was spilt.</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus.</h3>  
            <p>Grace, grace, God’s grace,</p>
            <p>Grace that will pardon and</p>
            <p>cleanse within;</p>
            <p>Grace, grace, God’s grace,</p>
            <p>Grace that is greater than all our</p>
            <p>sin.</p>        
    </div>
    <div style="margin-top:33px;">
            <p>Sin and despair like the sea waves cold,</p>
            <p>Threaten the soul with infinite loss;</p>
            <p>Grace that is greater, yes, grace untold,</p>
            <p>Points to the Refuge, the Mighty Cross.</p>      
    </div>
    <div style="margin-top:33px;">
        <p>Dark is the stain that we cannot hide,</p>
        <p>What can avail to wash it away? Look!</p>
        <p>There is flowing a crimson tide;</p>
        <p>Whiter than snow you may be today.</p>   
    </div>
    <div style="margin-top:33px;">
            <p>Marvelous, infinite, matchless grace,</p>
            <p>Freely bestowed on all who believe;</p>
            <p>You that are longing to see His face,</p>
            <p>Will you this moment His grace</p>
            <p>receive?</p>   
    </div>

    <!--Multicolor Circle -->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
    
    <!--Previous And Next Button--->
    <div class="previous">
        <a href="song12.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song14.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--Javascript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    