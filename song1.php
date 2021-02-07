<!--Header-->
<?php 
include ("layout/header.php");
?>

<!--Css-->
<link href="styles/songs.css" rel="stylesheet">
<body> 
    <div class="container" id="display">
        <!--Audio Song-->
        <div class="audio-container">
            <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=33")or die($conn->error());?>
                <?php while($row = $result->fetch_assoc()):?>
                    <?php
                        echo "<audio controls preload='metadata'>";
                            echo "<source src='songs/".$row['audio_name']."'>";
                        echo "</audio>";
                    ?> 
                <?php endwhile; ?>   
        </div>

            <!--Song Lyrics-->
        <h3>1. Only believe.</h3>     
        <p>Fear not, little flock,</p> 
        <p>from the cross to the throne,</p> 
        <p>From death into life He went for  his own,</p>
        <p>All power in earth, all power above,</p> 
        <p> is given to him for the flock of his love.</p>
        <div class="chorus" >
            <h3>Chorus</h3>
            <p>Only believe, Only believe,</p>
            <p>All things are possible, Only believe.</p>
            <p>Only believe, Only believe,</p>
            <p>All things are possible, Only believe.</p>
        </div>
        <div style="margin-top:33px;">
            <p>Fear not, little flock, he goeth ahead,</p>
            <p>Your shepherd selecteth the path you must tread,</p>
            <p>The water of marah he'll sweeten for thee,</p>
            <p>He drank all the bitter in Gethsemane.</p>
        </div>
        <div style="margin-top:33px;">
            <p>Fear not, little flock, whatever your lot,</p>
            <p>He enters all rooms, the doors being shut,</p>
            <p>He never forsake, He never is gone,</p>
            <p>So count on his presence in darkness and dawn.</p>
        </div>
        
        <!---Multicolor circle-->
        <div class="outer2">

        </div> 
        <div class="outer1">

        </div>
        
        <!--Previous And Next Button-->
        <div class="previous">
                <a href="song222.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
        </div>
        
        <div class="next">
            <a href="song2.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
        </div> 
        <!--Javascript-->
        <script src="js/scroll.js"></script> 
        <script src="js/main.js"></script> 
        <script src="js/jquery.js"></script>
                
        <script>
        function myFunction() {
        location.replace("index.php")
        }
        </script> 
        <!--Footer-->
        <?php
             include ("layout/footer.php");
        ?>

    </div>
  