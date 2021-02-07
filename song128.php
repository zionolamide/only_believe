<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
            <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=67")or die($conn->error());?>
                <?php while($row = $result->fetch_assoc()):?>
                    <?php
                        echo "<audio controls preload='metadata'>";
                            echo "<source src='songs/".$row['audio_name']."'>";
                        echo "</audio>";
                    ?> 
                <?php endwhile; ?>   
    </div>

    <!---song lyrics--->
    <h3>128. Jesus Loves Me.</h3>
        <p>Jesus loves me! This I know, For the</p>
        <p>Bible tells me so; Little ones to Him</p>
        <p>belong, They are weak but He is</p>
        <p>strong.</p>


    <div  style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Yes, Jesus loves me,</p>
            <p>Yes, Jesus loves me,</p>
            <p>Yes, Jesus loves me,</p>
            <p>The Bible tells me so.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Jesus loves me! He who died,</p>
        <p>Heaven’s gates to open wide; He will</p>
        <p>wash away my sin, Let His little child</p>
        <p>come in.</p>
    </div>
    <div  style="margin-top:33px;">
        <p>Jesus loves me! Loves me still,</p>
        <p>Though I’m very weak and ill; From</p>
        <p>His shining throne on high, Comes to</p>
        <p>watch me where I lie.</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song127.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song129.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    