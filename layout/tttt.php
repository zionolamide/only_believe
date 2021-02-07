<!---app dedicstion---->
<span>
                            
                        </span>


<!--only believe 1-222---->
<span>
                            <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=29")or die($conn->error());?>
                                <?php while($row = $result->fetch_assoc()):?>
                                    <?php
                                        echo "<div id='img_div'>";
                                            echo "<img src='images/".$row['img']."' class='sidenav_img'>";  
                                        echo "</div>";
                                    ?>  
                                <?php endwhile; ?> 
                        </span>
<!---share this app--->
                        <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=22")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---share img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>

<!---about--->
                            <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=23")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---about img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>


                            <!---contact--->
                            <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=3")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---contact img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>


                            <!---donate--->
                            <?php $result = mysqli_query($conn, "SELECT * FROM image WHERE id=26")or die($conn->error());?>
                            <?php while($row = $result->fetch_assoc()):?>
                                <!---share img--->
                                <?php
                                    echo "<div id='img_div'>";
                                        echo "<img src='images/".$row['img']."'  class='sidenav_img' >";
                                    echo "</div>";
                                ?> 
                            <?php endwhile; ?>