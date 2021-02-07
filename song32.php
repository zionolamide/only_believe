<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">

<div class="container">
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=9")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>

    <!--Song Lyrics-->
    <h3>32. By And By, Morning Comes.</h3>            
        <p>We are often tossed and driven on the</p>
        <p>restless sea of time, Somber skies and</p>
        <p>howling tempests oft succeed a bright</p>
        <p>sunshine; In that land of perfect day,</p>
        <p>when the mists have rolled away, We</p>
        <p>will understand it better by and by.</p>

    <div style="margin-top:33px;">
        <h3 class="chorus">Chorus</h3>
            <p>By and by when the morning</p>
            <p>comes,</p>
            <p>When all the saints of God are</p>
            <p>gathered home,</p>
            <p>We will tell the story how we</p>
            <p>overcome,</p>
            <p>For we’ll understand it better by</p>
            <p>and by.</p>
                                
    </div>
    <div style="margin-top:33px;">
        <p>We are often destitute of the things</p>
        <p>that life demands, Want of food and</p>
        <p>want of shelter, thirsty hills and barren</p>
        <p>lands; But we’re trusting in the Lord,</p>
        <p>and according to His Word, We will</p>
        <p>understand it better by and by.</p>

        
    </div>
    <div style="margin-top:33px;">
        <p>Trials dark on every hand, and we</p>
        <p>cannot understand, All the ways that</p>
        <p>God would lead us to that blessed</p>
        <p>Promised Land; But He guides us with</p>
        <p>His eye and we’ll follow till we die, For</p>
        <p>we’ll understand it better by and by.</p>
    </div>
    <div style="margin-top:33px;">
        <p>Temptations, hidden snares often take</p>
        <p>us unawares, And our hearts are made</p>
        <p>to bleed for many a thoughtless word</p>
        <p>or deed, And we wonder why the test</p>
        <p>when we try to do our best, But we’ll</p>
        <p>understand it better by and by.</p>
    </div>
    <div style="margin-top:33px;">
        
    </div>
    
    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song31.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song33.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script>

    <!---footer---> 
    <?php
    include ("layout/footer.php");
    ?>
    </div>
    