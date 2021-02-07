<!--Header-->
<?php 
  include ("layout/first_side_header.php");
?>
<!--Css-->
<link href="styles/message.css" rel="stylesheet">


    <div class="container" style="margin-top: 100px;" >
        <div class="head">
            <h4>To The Bride Of Christ This Hymn/song App Is Dedicated</h4>
                <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=2")or die($conn->error());?>
                    <?php while($row = $result->fetch_assoc()):?>
                        <?php
                            echo "<div id='img_div'>";
                                echo "<img src='images/".$row['img']."' class='img'>";
                            echo "</div>";
                        ?> 
                    <?php endwhile; ?>
            <!-- <img src="images/bro.jpg" alt="bro" class="img"> -->
            <p>Our Precious Brother...</p>
            <h3>William Marrion Branham</h3>
        </div>
        
        <div class="body" >
            <p>Most of the songs contained in only</p>
            <p>believe and believer's song</p>
            <p>book (songs Of prophet 1947-1965) </p>
            <p>were sung by brother branham</p>
            <p>as he taught us to worship the lord</p>
            <p>jesus in spirit and truth.</p>
            <h3 style="margin-top: 20px;">Forward</h3>
            <div class="img_con">
                <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=11")or die($conn->error());?>
                    <?php while($row = $result->fetch_assoc()):?>
                        <?php
                            echo "<div id='img_div'>";
                                echo "<img src='images/".$row['img']."'  style='width: 228px; margin-top: -16px;'>";
                            echo "</div>";
                        ?> 
                <?php endwhile; ?>
                <!-- <img src="images/line.png" alt="line" style="width: 228px; margin-top: -16px;"> -->
            </div>
            <div>
                <p>There's something about those </p>
                <p><b>Old Fashion songs, The Old-Time</b></p>
                <p><b>Hymns,</b> i'd rather have them than all</p>
                <p>these new worldly songs put in, </p>
                <p>in christain churches.</p>
                <p ><b>57-0908E Hebrews Chapter Six</b></p>
            </div>
            <div style="margin-top:20px;">
                <p>Listen, i want to say this just on the</p>
                <p>side, That's the kind of songs i love.</p>
                <p>I'D RATHER HAVE THEM, THAN ALL</p>
                <p>YOUR LITTLE OLD CHOPPED UP</p>
                <p><b>BOOGIE-WOOGIE THINGS THAT YOU</b></p>
                <p><b>TRY TO PUT IN CHURCH AND TAKE</b></p>
                <p><b>THE PLACE OF THE OLD FASHION</b></p>
                <p><b>HYMNS. </b>It'll never do it. No, sir. THE</p>
                <p>HOLY SPIRIT LOVES THOSE OLD</p>
                <p>FASHION SONGS. i just love it. It just</p>
                <p>goes way down deep in me. Maybe</p>
                <p>it's... oh, i believe you do too. Sure</p>
                <p>you do. You love those old fashion</p>
                <p>songs. I'm just one of them old</p>
                <p>fashion Christain</p>
                <p><b>57-0613 Thirsting For Life</b></p>
            </div >               
            <div style="margin-top:20px;">
              <p>I like church music played like church</p>
              <p>music and not rock-and-roll in the</p>
              <p>church</p>
              <p><b>57-0121E God Keeps His Word</b></p>
            </div>
            <div style="margin-top:20px;">
                <p>I like good singing. I JUST LOVE</p>
                <p>REAL GOOD SINGING. i've always</p>
                <p>said, when i get to heaven i want to</p>
                <p>get where they're singing, and listen. I</p>
                <p>never could get my fill of singing. You</p>
                <p>Know, Singing gives courage</p>
                <p><b>Leadership, prescott AZ 10-31-65</b></p>
                <h3>William Marrion Branham</h3>
          
            </div>
        </div>

        <!--Javascript-->
        <script src="js/main.js"></script> 
                
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
        
     