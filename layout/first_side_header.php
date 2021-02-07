<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Only believe Songs</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" text="text/css" href="styles/header.css">

        <!---Database Connection--->
        <?php
           include ("db_conn/conn.php");
        ?>
                    
    </head>
    <!-- Header section--> 
    <header class="wrapper"> 

        <!---Topnav Row--->
        <div class="topnav">
            <a href="#" class="song a">
                <span  onclick="openNav()" style="color:rgb(184, 244, 252); ">&#9776;</span>  
                <span style="color:rgb(184, 244, 252)">
                    <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=9")or die($conn->error());?>
                        <?php while($row = $result->fetch_assoc()):?>
                            <!---music note img--->
                            <?php
                                echo "<span id='img_div'>";
                                    echo "<img src='images/".$row['img']."'  class='note'>";
                                echo "</span>";
                            ?> 
                            <?php endwhile; ?>  
                Songs Of Worship
                </span>                    
            </a>

            <!-- <div class="right_nav">
               <a id="google_translate_element" class="a"></a>
            </div> -->
        </div>

        <!-- Side Navigation Bar-->
        <div id="mySidenav" class="sidenav" >     
            <div class="sticky">

                <!--image 1-->
                <div class="mySlides fade">
                    <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=12")or die($conn->error());?>
                        <?php while($row = $result->fetch_assoc()):?>
                            <!---guitar img--->
                            <?php
                                echo "<div id='img_div'>";
                                    echo "<img src='images/".$row['img']."'  class='slider'>";
                                echo "</div>";
                            ?> 
                        <?php endwhile; ?>   
                </div>	

                <!--image 2-->                   
                <div class="mySlides fade">  
                    <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=13")or die($conn->error());?>
                        <?php while($row = $result->fetch_assoc()):?>
                            <!---microphone img--->
                            <?php
                                echo "<div id='img_div'>";
                                    echo "<img src='images/".$row['img']."'  class='slider'>";
                                echo "</div>";
                            ?> 
                        <?php endwhile; ?>                        
                </div>

                <!--image 3-->
                <div class="mySlides fade">
                    <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=4")or die($conn->error());?>
                        <?php while($row = $result->fetch_assoc()):?>
                            <!---eagle img--->
                            <?php
                                echo "<div id='img_div'>";
                                    echo "<img src='images/".$row['img']."'  class='slider'>";
                                echo "</div>";
                            ?> 
                        <?php endwhile; ?>     
                </div>

                <!--image 4-->
                <div class="mySlides fade">
                    <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=2")or die($conn->error());?>
                        <?php while($row = $result->fetch_assoc()):?>
                            <!---brother branham img--->
                            <?php
                                echo "<div id='img_div'>";
                                    echo "<img src='images/".$row['img']."'  class='slider'>";
                                echo "</div>";
                            ?> 
                        <?php endwhile; ?>    
                </div>
                
                <!---title Head--->
                <span>
                    <h4  class="heads">Only Believe </h4>
                </span>                    
                
                <!---Settings btn--->
                <div class="outer_side2">
                </div>
                <div class="inner_side2" >
                    <a href="settings.php" class="settings">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=18")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."' style='height: 50px; width:50px; margin-left: -14px; margin-top: -4px;'>";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>    
                        <!-- <img src="images/settings.png" alt="settings" style="height: 50px; width:50px; margin-left: -14px; margin-top: -4px;"> -->
                        <span class="myspan"></span>
                   </a>
                </div>
                
                <!---Close Btn--->
                <div class="outer_side">
                </div>
                <div class="inner_side">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" title="Close Overlay" >&times;</a>        
                </div>
 
            </div>
             
            <ul style="" class="ul" id="myul">   
                <li class="li actives" >
                    <a href="message.php" class="a">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=49")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."' class='sidenav_img'>";  
                                    echo "</div>";
                                ?>  
                            <?php endwhile; ?>
                    </a>
                    <a href="message.php" class="a"  style="margin-top: -29px; margin-left: 27px;">App Dedication</a>
                </li>
                <!---Only Believe Songs row--->        
                <li class="li">
                    <a href="song1.php" class="a">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=29")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."' class='sidenav_img'>";  
                                    echo "</div>";
                                ?>  
                            <?php endwhile; ?>   
                            
                    </a>
                    <a href="song1.php" class="a" style="margin-top: -29px; margin-left: 27px;"> Only Believe Songs(1 - 222)</a>
                </li>

                <!---Share This Application row--->
                <li class="li">
                    <a href="">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=22")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---share img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>
                    </a>
                    <a href="#" class="a" style="margin-top: -29px; margin-left: 27px;"> Share This Application</a>
                </li>    
                
                <!---About row--->
                <li class="li">
                    <a href="#">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=23")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---about img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>
                    </a>
                    <a href="#"class="a" id="myAbout" style="margin-top: -29px; margin-left: 27px;"> About</a>
                </li>

                    <!---The About Modal--->
                    <div id="myModalAbout" class="modals">

                        <!---Modal Content--->
                        <div class="modal-content">

                            <!---Modal Header--->
                            <div class="modal-header">
                                <span class="closeAbout">&times;</span>
                                <h2>About</h2>
                            </div>

                            <!---Modal Body--->
                            <div class="modal-body">

                                <!---About Row--->                                
                                <div class="about">
                                  <p></p>
                                </div>

                            </div>
                        </div>
                    </div>
             
                <!---contact row--->
                <li class="li"> 
                   <a href="#">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=3")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---contact img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>
                   </a>
                  <a href="#"class="a" id="myAnchor" style="margin-top: -29px; margin-left: 27px;"> Contact</a>
                </li>

                    <!---The Contact Modal--->
                    <div id="myModal" class="modal">

                        <!---Modal Content--->
                        <div class="modal-content">

                            <!---Modal Header--->
                            <div class="modal-header">
                                <span class="close">&times;</span>
                                <h2>Contact</h2>
                            </div>

                            <!---Modal Body--->
                            <div class="modal-body">
                                
                                <!---Email Row--->
                                <div class="email">
                                    <div class="outer_side_mail"> </div>
                                    <div class="inner_side_mail">
                                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=15")or die($conn->error());?>
                                            <?php while($row = $result->fetch_assoc()):?>
                                                <?php
                                                    echo "<div id='img_div'>";
                                                        echo "<img src='images/".$row['img']."'  class='mail_img'>";
                                                    echo "</div>";
                                                ?> 
                                        <?php endwhile; ?>    
                                    </div>
                                    <h1 class="h1_mail">Email</h1>
                                    <a class="a_mail" href="">timehinzionolamide@gmail.com</a>
                                </div>
                               
                                <!---Phone Number row--->
                                <div class="phone">
                                    <div class="outer_side_phone"> </div>
                                    <div class="inner_side_phone">
                                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=3")or die($conn->error());?>
                                            <?php while($row = $result->fetch_assoc()):?>
                                                <?php
                                                    echo "<div id='img_div'>";
                                                        echo "<img src='images/".$row['img']."'  class='contact_img'>";
                                                    echo "</div>";
                                                ?> 
                                        <?php endwhile; ?> 
                                    </div>
                                    <h1 class="h1_phone">What's app</h1>       
                                    <a class="a_phone" href="https://wa.me/+2348067913476">+2348067913476</a>
                                </div>

                                <!---Instagram Row--->
                                <div class="instagram">
                                    <div class="outer_side_instagram"> </div>
                                    <div class="inner_side_instagram">
                                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=17")or die($conn->error());?>
                                            <?php while($row = $result->fetch_assoc()):?>
                                                <?php
                                                    echo "<div id='img_div'>";
                                                        echo "<img src='images/".$row['img']."'  class='instagram_img'>";
                                                    echo "</div>";
                                                ?> 
                                        <?php endwhile; ?> 
                                    </div>
                                    <h1 class="h1_instagram">Instagram</h1>       
                                    <a class="a_instagram" href="http://www.instagram.com/zionolamide/">@zionolamide</a>
                                </div>

                            </div>
                        </div>
                    </div>                   
                
                <!---Donate row--->
                <li class="li">
                    
                    <a href="#">
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=26")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---share img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>
                    </a>
                    <a href="#"class="a" style="margin-top: -29px; margin-left: 27px;"> Donate</a>
                </li>
            </ul>
                
                     
        </div>
    </header>

<script src="js/header.js"></script>
<script src="js/modal_about.js"></script>
<script src="js/modal_contact.js"></script>
<script src="js/main.js"></script> 

<script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
    