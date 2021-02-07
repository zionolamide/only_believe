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
    <body class="">
        <!-- Header section--> 
        <header class="wrapper"> 
            <!---Topnav Row--->
            <div class="topnav">
                <a href="#" class="song a">      
                        <span  onclick="openNav()" style="color:rgb(184, 244, 252); " class="tooltip">&#9776;</span> 
                    <span style="color:rgb(184, 244, 252); vertical-align: inherit; position: absolute; margin-left: 20px;" >
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=9")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <?php
                                    echo "<span id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='note'>";
                                    echo "</span>";
                                ?> 
                                <?php endwhile; ?>  
                    Songs Of Worship
                    </span>                    
                </a>

                <div class="topnav-right" style="">
                    
                    <a  href="message.php" style="color:rgb(184, 244, 252)" >
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=7")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <?php
                                    echo "<span id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='home'>";
                                    echo "</span>";
                                ?> 
                                <?php endwhile; ?>  
                    </a>                
                </div>
            </div>

            <!-- Side Navigation Bar-->
            <div id="mySidenav" class="sidenav"  style="width:0px;">        
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

                    <!---search --->
                    <input type="text" id="myInput" onkeyup="myFunctions()" placeholder="Search for names.." title="Type in a name">
                </div>

            
                <!--Ul List-->
                <ul style="" class="ul" id="myul">
                    <li><a href="song1.php" class="a  anchore" >1. Only Believe.</a></li>
                    <li><a href="song2.php" class="a anchore">2. Amazing Grace.</a></li>
                    <li><a href="song3.php"class="a anchore">3. They Come.</a></li>
                    <li><a href="song4.php"class="a anchore">4. I Love Him.</a></li>
                    <li><a href="song5.php"class="a anchore">5. Sweet Hour Of Prayer.</a></li>
                    <li><a href="song6.php"class="a anchore">6. Oh, How I Love Jesus.</a></li>
                    <li><a href="song7.php"class="a anchore">7. When The Redeemed.</a></li>
                    <li><a href="song8.php"class="a anchore">8. Oh, I Want To See Him.</a></li>
                    <li><a href="song9.php"class="a anchore">9. Feeling So Much Better.</a></li>
                    <li><a href="song10.php"class="a anchore">10. Teach Me, Lord, To Wait.</a></li>
                    <li><a href="song11.php"class="a anchore">11. Hallelujah, We Shall Rise.</a></li>
                    <li><a href="song12.php"class="a anchore">12. Wear A Crown.</a></li>
                    <li><a href="song13.php"class="a anchore">13. Marvelous Grace.</a></li>   
                    <li><a href="song14.php"class="a anchore" >14. Zion's Hill.</a></li> 
                    <li><a href="song15.php"class="a anchore" >15. We're Marching To Zion.</a></li>
                    <li><a href="song16.php"class="a anchore" >16. Cleanse Me.</a></li>
                    <li><a href="song17.php"class="a anchore" >17. My Sheep Know My Voice.</a></li>
                    <li><a href="song18.php"class="a anchore" >18. Onward Christian Soldier.</a></li>
                    <li><a href="song19.php"class="a anchore" >19. Let's Talk About Jesus.</a></li>   
                    <li><a href="song20.php"class="a anchore" >20. When Our Love Shall Come.</a></li> 
                    <li><a href="song21.php"class="a anchore" >21. The Flight Is On.</a></li>
                    <li><a href="song22.php"class="a anchore" >22. Victory In Jesus.</a></li>   
                    <li><a href="song23.php"class="a anchore" >23. My Faith Looks Up To Thee.</a></li>
                    <li><a href="song24.php"class="a anchore" >24. Living By Faith.</a></li>
                    <li><a href="song25.php"class="a anchore" >25. I Surrender All.</a></li>   
                    <li><a href="song26.php"class="a anchore" >26. When I Reach The City.</a></li>
                    <li><a href="song27.php"class="a anchore" >27. farther Along.</a></li>
                    <li><a href="song28.php"class="a anchore" >28. Fill My Way With Love.</a></li>
                    <li><a href="song29.php"class="a anchore" >29. I Am Resolved.</a></li>   
                    <li><a href="song30.php"class="a anchore" >30. Higher Ground.</a></li> 
                    <li><a href="song31.php"class="a anchore" >31. Standing On The Promises.</a></li>
                    <li><a href="song32.php"class="a anchore" >32. By And By, Morning Comes.</a></li>   
                    <li><a href="song33.php"class="a anchore" >33. Rock of Ages.</a></li>
                    <li><a href="song34.php"class="a anchore" >34. When I See The Blood.</a></li>
                    <li><a href="song35.php"class="a anchore" >35. Love Lifted Me .</a></li>   
                    <li><a href="song36.php"class="a anchore" >36. Showers Of Blessing.</a></li>
                    <li><a href="song37.php"class="a anchore" >37. Have Thine Own Way,Lord.</a></li>   
                    <li><a href="song38.php"class="a anchore" >38. Draw Me Nearer.</a></li> 
                    <li><a href="song39.php"class="a anchore" >39. I Am Marked.</a></li>
                    <li><a href="song40.php"class="a anchore" >40. Won't It Be Wonderful?.</a></li>
                    <li><a href="song41.php"class="a anchore" >41. Wings Of A Dove.</a></li>
                    <li><a href="song42.php"class="a anchore" >42. I Feel Like Travelling On.</a></li>
                    <li><a href="song43.php"class="a anchore" >43. Come And Thine.</a></li>   
                    <li><a href="song44.php"class="a anchore" >44. God Leads Us Along.</a></li> 
                    <li><a href="song45.php"class="a anchore" >45. Leaning On Lasting Arms.</a></li>
                    <li><a href="song46.php"class="a anchore" >46. Sunlight.</a></li>   
                    <li><a href="song47.php"class="a anchore" >47. I Know Whom I Believed.</a></li>
                    <li><a href="song48.php"class="a anchore" >48. Bringing In The Sheaves.</a></li>
                    <li><a href="song49.php"class="a anchore" >49. Some Golden Daybreak.</a></li>   
                    <li><a href="song50.php"class="a anchore" >50. Shall We Gather At The River.</a></li>
                    <li><a href="song51.php"class="a anchore" >51. Glory To His Name.</a></li>
                    <li><a href="song52.php"class="a anchore" >52. He Brought Me Out .</a></li>
                    <li><a href="song53.php"class="a anchore" >53. Sweet By And By.</a></li>   
                    <li><a href="song54.php"class="a anchore" >54. There Is A fountain.</a></li> 
                    <li><a href="song55.php"class="a anchore" >55. Oh, What  Precious Love.</a></li>
                    <li><a href="song56.php"class="a anchore" >56. Jesus Never Fails.</a></li>   
                    <li><a href="song57.php"class="a anchore" >57. Battle Hymn Of Republic.</a></li>
                    <li><a href="song58.php"class="a anchore" >58. Amen.</a></li>
                    <li><a href="song59.php"class="a anchore" >59. The Circuit Rider .</a></li>   
                    <li><a href="song60.php"class="a anchore" >60. Each Step Of The Way .</a></li>
                    <li><a href="song61.php"class="a anchore" >61. I Shall Not Be Moved.</a></li>   
                    <li><a href="song62.php"class="a anchore" >62. Yesterday, Today, Forever.</a></li> 
                    <li><a href="song63.php"class="a anchore" >63. The Old-Time Religion.</a></li>
                    <li><a href="song64.php"class="a anchore" >64. Get On Board.</a></li>
                    <li><a href="song65.php"class="a anchore" >65. On The Other Shore.</a></li>
                    <li><a href="song66.php"class="a anchore" >66. Shine on Me.</a></li>
                    <li><a href="song67.php"class="a anchore" >67. To Be Like Him.</a></li>   
                    <li><a href="song68.php"class="a anchore" >68. Great Is Thy Faithfulness.</a></li> 
                    <li><a href="song69.php"class="a anchore" >69. Open My Eyes, That I May See.</a></li>
                    <li><a href="song70.php"class="a anchore" >70. He's Everything To Me.</a></li>   
                    <li><a href="song71.php"class="a anchore" >71. I Know It Was The Blood.</a></li>
                    <li><a href="song72.php"class="a anchore" >72. Oh Won't You Watch!.</a></li>
                    <li><a href="song73.php"class="a anchore" >73. I'm Overcoming.</a></li>   
                    <li><a href="song74.php"class="a anchore" >74. Spirit Of The Living God.</a></li>
                    <li><a href="song75.php"class="a anchore" >75. The Beauty Of Jesus.</a></li>
                    <li><a href="song76.php"class="a anchore" >76. Shut In With God.</a></li>
                    <li><a href="song77.php"class="a anchore" >77. Turn Your Eyes Upon Jesus.</a></li>   
                    <li><a href="song78.php"class="a anchore" >78. We'll Give Glory To Jesus.</a></li> 
                    <li><a href="song79.php"class="a anchore" >79. Sweet Over My Soul.</a></li>
                    <li><a href="song80.php"class="a anchore" >80. Friendship With Jesus.</a></li>   
                    <li><a href="song81.php"class="a anchore" >81. Jesus Is The One.</a></li>
                    <li><a href="song82.php"class="a anchore" >82. He's Coming Again.</a></li>
                    <li><a href="song83.php"class="a anchore" >83. The Lily Of The Valley .</a></li>   
                    <li><a href="song84.php"class="a anchore" >84. He Careth For You .</a></li>
                    <li><a href="song85.php"class="a anchore" >85. When I Get To The End.</a></li>
                    <li><a href="song86.php"class="a anchore" >86. Room At The Cross.</a></li>   
                    <li><a href="song87.php"class="a anchore" >87. When The Roll Is Called.</a></li>
                    <li><a href="song88.php"class="a anchore" >88. The Haven Of Rest.</a></li>
                    <li><a href="song89.php"class="a anchore" >89. Must Jesus Bear Along?.</a></li>   
                    <li><a href="song90.php"class="a anchore" >90. Blessed Be The Name.</a></li>
                    <li><a href="song91.php"class="a anchore" >91. I'm Going Through.</a></li>
                    <li><a href="song92.php"class="a anchore" >92. Speak, My Lord .</a></li>
                    <li><a href="song93.php"class="a anchore" >93. The Love Of God.</a></li>   
                    <li><a href="song94.php"class="a anchore" >94. The Meeting In The Air.</a></li> 
                    <li><a href="song95.php"class="a anchore" >95. It's Dripping With Blood.</a></li>
                    <li><a href="song96.php"class="a anchore" >96. Holy, Holy, Holy.</a></li>   
                    <li><a href="song97.php"class="a anchore" >97. This World Can't Hold Me.</a></li>
                    <li><a href="song98.php"class="a anchore" >98. Our Lord's Return.</a></li>
                    <li><a href="song99.php"class="a anchore" >99. I Shall Know Him .</a></li>   
                    <li><a href="song100.php"class="a anchore">100. Then Jesus Came .</a></li>
                    <li><a href="song101.php"class="a anchore">101. When I Survey The Cross.</a></li>
                    <li><a href="song102.php"class="a anchore">102. The Water Way.</a></li>
                    <li><a href="song103.php"class="a anchore">103. Don't Forget Prayer .</a></li>
                    <li><a href="song104.php"class="a anchore">104. Stand On That Rock.</a></li>
                    <li><a href="song105.php"class="a anchore">105. That Man From Galilee .</a></li>
                    <li><a href="song106.php"class="a anchore">106. Reach Out, Touch The Lord.</a></li>
                    <li><a href="song107.php"class="a anchore">107. In That City, Lamb Is Light</a></li>
                    <li><a href="song108.php"class="a anchore">108. Jesus Set Me Free.</a></li>
                    <li><a href="song109.php"class="a anchore">109. When I Take My Vacation.</a></li>
                    <li><a href="song110.php"class="a anchore">110. Oh, It Is Jesus.</a></li>
                    <li><a href="song111.php"class="a anchore">111. What Then?.</a></li>
                    <li><a href="song112.php"class="a anchore">112. Faith In Jehovah .</a></li>
                    <li><a href="song113.php"class="a anchore">113. Leave It There.</a></li>   
                    <li><a href="song114.php"class="a anchore">114. I Can, I Will, I Do Believe.</a></li> 
                    <li><a href="song115.php"class="a anchore">115. Isn't He Wonderful!.</a></li>
                    <li><a href="song116.php"class="a anchore">116. The Lifeboat.</a></li>
                    <li><a href="song117.php"class="a anchore">117. It Shall Flow Like A River.</a></li>
                    <li><a href="song118.php"class="a anchore">118. The Great Judgement.</a></li>
                    <li><a href="song119.php"class="a anchore">119. I Have Crossed Riven veil.</a></li>   
                    <li><a href="song120.php"class="a anchore">120. Room At The Fountain.</a></li> 
                    <li><a href="song121.php"class="a anchore">121. Come And Go With Me.</a></li>
                    <li><a href="song122.php"class="a anchore">122. Just Another Touch.</a></li>   
                    <li><a href="song123.php"class="a anchore">123. The Pearly White City.</a></li>
                    <li><a href="song124.php"class="a anchore">124. Just A Closer Walk.</a></li>
                    <li><a href="song125.php"class="a anchore">125. The Message Of His Coming.</a></li>   
                    <li><a href="song126.php"class="a anchore">126. The Sheep Of His Pasture.</a></li>
                    <li><a href="song127.php"class="a anchore">127. Are You Washed In The Blood.</a></li>
                    <li><a href="song128.php"class="a anchore">128. Jesus Loves Me.</a></li>
                    <li><a href="song129.php"class="a anchore">129. Baptized Into The Body.</a></li>   
                    <li><a href="song130.php"class="a anchore">130. This Is Like Heaven To Me.</a></li> 
                    <li><a href="song131.php"class="a anchore">131. What Would You Exchange.</a></li>
                    <li><a href="song132.php"class="a anchore">132. Wonderful Time.</a></li>   
                    <li><a href="song133.php"class="a anchore">133. When He Reached Down.</a></li>
                    <li><a href="song134.php"class="a anchore">134. Bring Them In.</a></li>
                    <li><a href="song135.php"class="a anchore">135. How Great Thou Art .</a></li>   
                    <li><a href="song136.php"class="a anchore">136. Old-Time Power.</a></li>
                    <li><a href="song137.php"class="a anchore">137. There Is Power In Blood.</a></li>   
                    <li><a href="song138.php"class="a anchore">138. The Solid Rock.</a></li> 
                    <li><a href="song139.php"class="a anchore">139. He Abides.</a></li>
                    <li><a href="song140.php"class="a anchore">140. Redeemed.</a></li>
                    <li><a href="song141.php"class="a anchore">141. Nothing But The Blood.</a></li>
                    <li><a href="song142.php"class="a anchore">142. Jesus, The Light.</a></li>
                    <li><a href="song143.php"class="a anchore">143. When We See Christ.</a></li>   
                    <li><a href="song144.php"class="a anchore">144. Whiter Than The Snow.</a></li> 
                    <li><a href="song145.php"class="a anchore">145. All Hail Jesus Name.</a></li>
                    <li><a href="song146.php"class="a anchore">146. At The Cross.</a></li>   
                    <li><a href="song147.php"class="a anchore">147. The Great I Am.</a></li>
                    <li><a href="song148.php"class="a anchore">148. Almost Persuaded.</a></li>
                    <li><a href="song149.php"class="a anchore">149. No Disappointment.</a></li>   
                    <li><a href="song150.php"class="a anchore">150. Happy Day.</a></li>
                    <li><a href="song151.php"class="a anchore">151. One Of Them.</a></li>
                    <li><a href="song152.php"class="a anchore">152. I'll Be Listening .</a></li>
                    <li><a href="song153.php"class="a anchore">153. The Homecoming Week.</a></li>   
                    <li><a href="song154.php"class="a anchore">154. Just As I Am.</a></li> 
                    <li><a href="song155.php"class="a anchore">155. Peace In The Valley.</a></li>
                    <li><a href="song156.php"class="a anchore">156. Great Is The Lord.</a></li>   
                    <li><a href="song157.php"class="a anchore">157. I've Anchored In Jesus.</a></li>
                    <li><a href="song158.php"class="a anchore">158. Beyond The Sunset.</a></li>
                    <li><a href="song159.php"class="a anchore">159. A Child Of The King .</a></li>   
                    <li><a href="song160.php"class="a anchore">160. Hold To God's Hand .</a></li>
                    <li><a href="song161.php"class="a anchore">161.The Day Of Redemption.</a></li>
                    <li><a href="song162.php"class="a anchore">162. Only Trust Him .</a></li>
                    <li><a href="song163.php"class="a anchore">163. One Day!.</a></li>
                    <li><a href="song164.php"class="a anchore">164. Swing Low, Sweet Chariot.</a></li>   
                    <li><a href="song165.php"class="a anchore">165. When They Ring The Bells.</a></li> 
                    <li><a href="song166.php"class="a anchore">166. When We All Get To Heaven.</a></li>
                    <li><a href="song167.php"class="a anchore">167. The Old Rugged Cross.</a></li>   
                    <li><a href="song168.php"class="a anchore">168. Where He Leads Me.</a></li>
                    <li><a href="song169.php"class="a anchore">169. Wonderful.</a></li>
                    <li><a href="song170.php"class="a anchore">170. Where Could I Go?.</a></li>   
                    <li><a href="song171.php"class="a anchore">171. Wonderful Peace.</a></li>
                    <li><a href="song172.php"class="a anchore">172. The Sun, Never Go Down.</a></li>
                    <li><a href="song173.php"class="a anchore">173. I Bowed And Cried, "Holy".</a></li>
                    <li><a href="song174.php"class="a anchore">174. When The Saints March In.</a></li>   
                    <li><a href="song175.php"class="a anchore">175. I'd Rather Be Christain.</a></li> 
                    <li><a href="song176.php"class="a anchore">176. Blessed Assurance.</a></li>
                    <li><a href="song177.php"class="a anchore">177. The Cloud And Fire.</a></li>   
                    <li><a href="song178.php"class="a anchore">178. I Won't Cross Alone.</a></li>
                    <li><a href="song179.php"class="a anchore">179. Softly And Tenderly.</a></li>
                    <li><a href="song180.php"class="a anchore">180. Close To Thee.</a></li>   
                    <li><a href="song181.php"class="a anchore">181. Got Any Rivers?.</a></li>
                    <li><a href="song182.php"class="a anchore">182. Where We Never Grow Old.</a></li>   
                    <li><a href="song183.php"class="a anchore">183. Lift Him Up.</a></li> 
                    <li><a href="song184.php"class="a anchore">184. Beulah Land.</a></li>
                    <li><a href="song185.php"class="a anchore">185. The Lord Brought Me Out.</a></li>
                    <li><a href="song186.php"class="a anchore">186. Gathering Sheaves.</a></li>
                    <li><a href="song187.php"class="a anchore">187. Such Love.</a></li>
                    <li><a href="song188.php"class="a anchore">188. Down From His Glory.</a></li>   
                    <li><a href="song189.php"class="a anchore">189. I'll Meet You.</a></li> 
                    <li><a href="song190.php"class="a anchore">190. Watching You.</a></li>
                    <li><a href="song191.php"class="a anchore">191. Past The Curtain Of Time.</a></li>   
                    <li><a href="song192.php"class="a anchore">192. Honey In The Rock.</a></li>
                    <li><a href="song193.php"class="a anchore">193. The Unveiled Christ.</a></li>
                    <li><a href="song194.php"class="a anchore">194. Jesus Breaks Every Fetter.</a></li>   
                    <li><a href="song195.php"class="a anchore">195. He's The Lord Of Glory.</a></li>
                    <li><a href="song196.php"class="a anchore">196. I Will Praise Him.</a></li> 
                    <li><a href="song197.php"class="a anchore">197. There's A Great Day Coming.</a></li>
                    <li><a href="song198.php"class="a anchore">198. He's Coming Soon.</a></li>   
                    <li><a href="song199.php"class="a anchore">199. What A Friend.</a></li>
                    <li><a href="song200.php"class="a anchore">200. I'm Bound For Promise Land.</a></li>
                    <li><a href="song201.php"class="a anchore">201. The Great Physician.</a></li>   
                    <li><a href="song202.php"class="a anchore">202. I Must Tell Jesus.</a></li>
                    <li><a href="song203.php"class="a anchore">203. Nothing Between.</a></li>
                    <li><a href="song204.php"class="a anchore">204. What A Day That Wil Be.</a></li>
                    <li><a href="song205.php"class="a anchore">205. Near The Cross.</a></li>   
                    <li><a href="song206.php"class="a anchore">206. Pass Me Not.</a></li>
                    <li><a href="song207.php"class="a anchore">207. I See A Crimson Stream.</a></li> 
                    <li><a href="song208.php"class="a anchore">208. Come To The The Feast.</a></li>
                    <li><a href="song209.php"class="a anchore">209. Lord, I'm Coming Home.</a></li>   
                    <li><a href="song210.php"class="a anchore">210. The Eastern Gate.</a></li>
                    <li><a href="song211.php"class="a anchore">211. Jesus Paid It All.</a></li>
                    <li><a href="song212.php"class="a anchore">212. I Believe God.</a></li>   
                    <li><a href="song213.php"class="a anchore">213. We Work Till Jesus Comes.</a></li>
                    <li><a href="song214.php"class="a anchore">214. The Windows Of Heaven.</a></li>
                    <li><a href="song215.php"class="a anchore">215. Precious Memories.</a></li> 
                    <li><a href="song216.php"class="a anchore">216. The End Time .</a></li>
                    <li><a href="song217.php"class="a anchore">217. It Is No Secret.</a></li>   
                    <li><a href="song218.php"class="a anchore">218. How Great Is Our God!.</a></li>
                    <li><a href="song219.php"class="a anchore">219. So Just Be Faithful.</a></li>
                    <li><a href="song220.php"class="a anchore">220. Blest Be The Tie That Binds.</a></li>   
                    <li><a href="song221.php"class="a anchore">221. God Be With You.</a></li>
                    <li><a href="song222.php"class="a anchore">222. Take The Name Of Jesus.</a></li>
                </ul>                 
            </div>               	
        </header> 
    </body>
 

<!--javascript code-->
<script src="js/scroll.js" type="text/javascript"></script>
<script src="js/header.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/active.js" type="text/javascript"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script>

</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
     