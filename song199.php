<!---header---->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=34")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <!--Song Lyrics-->
    <h3>199. What A Friend.</h3>
        <p>What a friend we have in Jesus, All our</p>
        <p>sins and griefs to bear! What a</p>
        <p>privilege to carry Everything to God</p>
        <p>in prayer! O what peace we often</p>
        <p>forfeit, O what needless pain we bear,</p>
        <p>All because we do not carry</p>
        <p>Everything to God in prayer!</p>
    <div  style="margin-top:33px;">
        <p>Have we trials and temptations? Is</p>
        <p>there trouble anywhere? We should</p>
        <p>never be discouraged, Take it to the</p>
        <p>Lord in prayer. Can we find a friend so</p>
        <p>faithful, Who will all our sorrows</p>
        <p>share? Jesus knows our every</p>
        <p>weakness, Take it to the Lord in</p>
        <p> prayer.</p>
            
    </div>
    <div  style="margin-top:33px;">
        <p>Are we weak and heavy laden,</p>
        <p>Cumbered with a load of care?</p>
        <p>Precious Saviour, still our refuge, Take</p>
        <p>it to the Lord in prayer. Do thy friends</p>
        <p>despise, forsake thee? Take it to the</p>
        <p>Lord in prayer; In His arms He’ll take</p>
        <p>and shield thee, Thou wilt find a</p>
        <p>solace there.</p> 
    </div>
    <div  style="margin-top:33px;">
        
    </div>
    <div style="margin-top:33px;">
        
    </div>

    <!---multicolor circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--previous and next button--->      
    <div class="previous">
        <a href="song198.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song200.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--javascript--->
    <script src="js/main.js"></script>

    <!--footer---> 
    <?php
    include ("layout/footer.php");
    ?>
</div>
    