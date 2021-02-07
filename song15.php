<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=11")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>15. We're Marching To Zion.</h3>            
        <p>Come, we that love the Lord, And let</p>
        <p>our joys be known, Join in a song with</p>
        <p>sweet accord, Join in a song with</p>
        <p>sweet accord, and thus surround the</p>
        <p>throne, And thus surround the throne.</p> 
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus.</h3>  
            <p>We’re marching to Zion,</p>
            <p>Beautiful, beautiful Zion;</p>
            <p>We’re marching upward to Zion,</p>
            <p>The beautiful city of God.</p>              
    </div>
    <div style="margin-top:33px;">
        <p>Let those refuse to sing Who never</p>
        <p>knew our God; But children of the</p>
        <p>heavenly King, But children of the</p>
        <p>heavenly King, May speak their joys</p>
        <p>abroad, May speak their joys abroad.</p>      
    </div>
    <div style="margin-top:33px;">
        <p>The hill of Zion yields A thousand</p>
        <p>sacred sweets Before we reach the</p>
        <p>heavenly fields, Before we reach the</p>
        <p>heavenly fields, Or walk the golden</p>
        <p>streets, Or walk the golden streets.</p>      
    </div>
    <div style="margin-top:33px;">
        <p>Then let our songs abound, And every</p>
        <p>tear be dry; We’re marching thru</p>
        <p>Immanuel’s ground, We’re marching</p>
        <p>thru Immanuel’s ground, To fairer</p>
        <p>worlds on high, To fairer worlds on</p>
        <p>high.</p>    
    </div>

    <!--Multicolor Circle --->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>
        
    <!--Previous And Next Button-->
    <div class="previous">
        <a href="song14.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song16.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!--Javascript-->
    <script src="js/main.js"></script>
    
    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    