<!--Header-->
<?php 
  include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">

<div class="container" >

    <!--Audio Songs-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=1")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>10. Teach Me Lord To Wait.</h3>            
        <p>Teach me, Lord, to wait down on my</p>
        <p>knees. Till in Your own good time</p>
        <p>You answer my pleas; Teach me not</p>
        <p>to rely on what others do, But to wait</p>
        <p>in prayer for an answer from You.</p> 
    
    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus.</h3>  
            <p>They that wait upon the Lord,</p>
            <p>shall renew their strength,</p>
            <p>They shall mount up with wings</p>
            <p>as an eagle.</p>
            <p>They shall run and not be weary,</p>
            <p>they shall walk and not faint;</p>
            <p>Teach me, Lord, teach me, Lord, to</p>
            <p>wait.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Teach me, Lord, to wait while hearts</p>
            <p>are aflame, Help me humble my pride</p>
            <p>and call on Your name; Keep my faith</p>
            <p>renewed, keep my eyes on Thee, Help</p>
            <p>me be on this earth what You want me</p>
            <p>to be.</p>
    </div>

    
    <!--Multicole Circle-->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!--Previous And Next Button-->      
    <div class="previous">
        <a href="song9.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song11.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>

    <!--JavaScript-->
    <script src="js/main.js"></script> 

    <!--Footer-->
    <?php
    include ("layout/footer.php");
    ?>
</div>
    