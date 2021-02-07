<!---header--->
<?php 
  include ("layout/header.php");
?>
<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=10")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>43. Come And Dine.</h3>            
        <p>Jesus has a table spread where the</p>
        <p>saints of God are fed, He invites His</p>
        <p>chosen people “Come and dine;”</p>
        <p>With His manna He doth feed and</p>
        <p>supplies our every need; O, ‘tis sweet</p>
        <p>to sup with Jesus all the time!</p>


    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3> 
            <p>“Come and dine,” the Master</p>
            <p>calleth, “Come and dine;”</p>
            <p>You may feast at Jesus’ table all</p>
            <p>the time;</p>
            <p>He who fed the multitude, turned</p>
            <p>the water into wine,</p>
            <p>To the hungry calleth now, “come</p>
            <p>and dine.”</p>
    </div>
    <div style="margin-top:33px;">
        <p>The disciples came to land, thus</p>
        <p>obeying Christ’s command, For the</p>
        <p>Master called to them, “Come and</p>
        <p>dine;” there they found their hearts’</p>
        <p>desire, bread and fish upon the fire;</p>
        <p>Thus He satisfies the hungry every</p>
        <p>time.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Soon the Lamb will take His bride to</p>
        <p>be ever at His side, All the host of</p>
        <p>heaven will assembled be; O, ‘twill be</p>
        <p>a glorious sight, all the saints in spotless</p>
        <p>white; And with Jesus they will feast</p>
        <p>eternally.</p> 
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song42.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song44.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    