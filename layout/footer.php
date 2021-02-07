<?php 
$query = "SELECT COUNT(id) AS COUNT FROM `audio`";
$query_result = mysqli_query($conn, $query);

$result = $conn->query("SELECT * FROM audio")or die($conn->error());
while($row = mysqli_fetch_assoc($query_result)){
    $songs_output = ""." ".$row['COUNT'];
}

?>
<link href="styles/footer.css" rel="stylesheet">
<div class="box" >
            <div class="content">
                    <div class="myhead">
                        <h4 style="color:rgb(10, 158, 163);">Total uploaded songs</h4>
                    </div>
                    <div class="mybody">
                     <p>
                        <?php 
                           echo $songs_output;
                        ?>
                     </p>
                    </div>
                    
            </div>
        </div>

        <div class="box" >
            <div class="content">
                    <div class="myhead">
                        <h4 style="color:rgb(10, 158, 163);">Remaining songs</h4>
                    </div>
                    <div class="mybody">
                     <p>
                        <?php 
                           echo 222 -  $songs_output;
                        ?>
                     </p>
                    </div>
                    
            </div>
        </div>
    <div class="copyright" >
           
            </script> Designed By <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://instagram.com/zionolamide" target="_blank" class="design_name">Timehin Zion</a>
           
 
    </div>

		</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
