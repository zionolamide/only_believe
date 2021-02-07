<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=13")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>37. Have Thine Own Way Lord.</h3>            
        <p>Have Thine own way, Lord! Have</p>
        <p>Thine own way! Thou art the Potter; I</p>
        <p>am the clay. Mould me and make me</p>
        <p>After Thy will, While I am waiting,</p>
        <p>Yielded and still.</p>


    <div style="margin-top:33px;">
            <p>Have Thine own way Lord! Have</p>
            <p>Thine own way! Search me and try</p>
            <p>me, Master, today! Whiter than snow</p>
            <p>Lord, Wash me just now, As in Thy</p>
            <p>presence Humbly I bow.</p>               
    </div>
    <div style="margin-top:33px;">
        <p>Have Thine own way, Lord! Have</p>
        <p>Thine own way! Wounded and weary,</p>
        <p>Help me, I pray! Power, all power,</p>
        <p>Surely is Thine! Touch me and heal</p>
        <p>me, Saviour divine!</p>
        
    </div>
    <div style="margin-top:33px;">
            <p>Have Thine own way, Lord! Have</p>
            <p>Thine own way! Hold o’er my being,</p>
            <p>Absolute sway! Fill with Thy Spirit,</p>
            <p>Till all shall see, Christ only, always,</p>
            <p>Living in me!</p>
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song36.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song38.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php                       
    include ("layout/footer.php");                                                                      
    ?>
</div>
    