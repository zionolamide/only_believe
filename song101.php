<!---header --->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=83")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <h3>101. When I Survey The Cross.</h3>            
        <p>When I survey the wondrous cross</p>
        <p>On which the Prince of glory died, My</p>
        <p>richest gain I count but loss, And pour</p>
        <p>contempt on all my pride.</p>
    <div style="margin-top:33px;">
            <p>Forbid it, Lord, that I should boast,</p>
            <p>Save in the death of Christ, my God;</p>
            <p>All the vain things that charm me</p>
            <p>most, I sacrifice them to His blood.</p>
            
    </div>
    <div style="margin-top:33px;">
        <p>See, from his head, his hands, his feet,</p>
        <p>Sorrow and love flow mingled down;</p>
        <p>Did e’er such love and sorrow meet,</p>
        <p>Or thorns compose so rich a crown?</p>
    </div>
    <div style="margin-top:33px;">
        <p>Were the whole realm of nature mine,</p>
        <p>That were a present far too small;</p>
        <p>Love so amazing, so divine, Demands</p>
        <p>my soul, my life, my all!</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song100.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song102.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js">
    </script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    