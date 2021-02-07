<!----header-->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=77")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>168. Where He Leads Me.</h3>
        <p>I can hear my Saviour calling, I can</p>
        <p>hear my Saviour calling, I can hear my</p>
        <p>Saviour calling, “Take thy cross, and</p>
        <p>follow, follow Me.” </p>
    <div  style="margin-top:33px;">
            <h3 class="chorus">Chorus</h3>
            <p>Where He leads me I will follow,</p>
            <p>Where He leads me I will follow,</p>
            <p>Where He leads me I will follow,</p>
            <p>I’ll go with Him, with Him all the</p>
            <p>way.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>I’ll go with Him through the garden,</p>
        <p>I’ll go with Him through the garden,</p>
        <p>I’ll go with Him through the garden,</p>
        <p>I’ll go with Him, with Him all the way.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>I’ll go with Him through the judgment,</p>
        <p>I’ll go with Him through the judgment,</p>
        <p>I’ll go with Him through the judgment,</p>
        <p>I’ll go with Him, with Him all the way.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>He will give me grace and glory, He</p>
        <p>will give me grace and glory, He will</p>
        <p>give me grace and glory, And go with</p>
        <p>me, with me all the way.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>     

    <!---previous and next button---> 
    <div class="previous">
        <a href="song167.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song169.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js">
    </script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    