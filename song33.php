<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=50")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>33. Rock Of Ages.</h3>            
        <p>Rock of Ages, cleft for me, Let me</p>
        <p>hide myself in Thee; Let the water and</p>
        <p>the blood, From Thy wounded side</p>
        <p>which flowed, Be of sin the double</p>
        <p>cure, Save from wrath and make me</p>
        <p>Pure.</p>
    <div style="margin-top:33px;">
        <p>Could my tears forever flow, Could</p>
        <p>my zeal no languor know, These for</p>
        <p>sin could not atone; Thou must save,</p>
        <p>and Thou alone; In my hand no price</p>
        <p>I bring, Simply to Thy cross I cling.</p>                          
    </div>
    <div style="margin-top:33px;">
        <p>While I draw this fleeting breath,</p>
        <p>When my eyes shall close in death,</p>
        <p>When I rise to worlds unknown, And</p>
        <p>behold Thee on Thy throne, Rock of</p>
        <p>Ages, cleft for me, Let me hide myself</p>
        <p> in Thee.</p>      
    </div>
      
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song32.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song34.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script> 

    <!---footer--->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    