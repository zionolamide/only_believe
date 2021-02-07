<!--Header-->
<?php 
  include ("layout/header.php");
?>
<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" style="margin-top:68px;">
    
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=66")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                        echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>221. God Be With You.</h3>
        <p>God be with you till we meet again! By</p>
        <p>His counsels’ guide, uphold you, With</p>
        <p>His sheep securely fold you; God be</p>
        <p>with you till we meet again!</p>
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>Till we meet! Till we meet” Till</p>
            <p>we meet at Jesus’ feet; Till we</p>
            <p>meet! Till we meet! God be with</p>
            <p>you till we meet again!</p>
    </div>
    <div style="margin-top:33px;">
        <p>God be with you till we meet again!</p>
        <p>‘Neath His wings securely hide you,</p>
        <p>Daily manna still provide you; God be</p>
        <p>with you till we meet again!</p>
    </div>
    <div style="margin-top:33px;">
        <p>God be with you till we meet again!</p>
        <p> When life’s perils thick confound you,</p>
        <p>Put His arms unfailing round you;</p>
        <p>God be with you till we meet again!</p>
    </div>
    <div style="margin-top:33px;">
        <p>God be with you till we meet again!</p>
        <p>Keep love’s banner floating o’er you,</p>
        <p>Smite death’s threat’ning wave before</p>
        <p>you; God be with you till we meet</p>
        <p>again!</p>
    </div>

    <!--Multicolor Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>  

    <!--Previous And Next Button-->    
    <div class="previous">
        <a href="song220.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song222.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    