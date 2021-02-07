<!---header--->
<?php 
  include ("layout/header.php");
?>

<!---css--->
<link href="styles/songs.css" rel="stylesheet">
<div class="container" >
    <!--Audio Song-->
    <div class="audio-container">
        <?php $result = mysqli_query($conn, "SELECT * FROM audio WHERE id=80")or die($conn->error());?>
            <?php while($row = $result->fetch_assoc()):?>
                <?php
                    echo "<audio controls preload='metadata'>";
                         echo "<source src='songs/".$row['audio_name']."'>";
                    echo "</audio>";
                ?> 
            <?php endwhile; ?>   
    </div>
    <h3>54. There Is A Fountain.</h3>            
        <p>There is a fountain filled with blood,</p>
        <p>Drawn from Immanuel’s veins, And</p>
        <p>sinners plunged beneath that flood,</p>
        <p>Lose all their guilty stains. Lose all</p>
        <p>their guilty stains, Lose all their guilty</p>
        <p>stains; And sinners plunged beneath</p>
        <p>that flood, Lose all their guilty stains.</p>
    <div style="margin-top:33px;">
        <p>The dying thief rejoiced to see That</p>
        <p>fountain in his day; And there may I,</p>
        <p>though vile as he, Wash all my sins</p>
        <p>away. Wash all my sins away, Wash all</p>
        <p>my sins away; And there may I, though</p>
        <p>vile as he, Wash all my sins away.</p>                 
    </div>
    <div style="margin-top:33px;">
            <p>Thou dying Lamb, Thy precious blood</p>
            <p>Shall never lose its power, Till all the</p>
            <p>ransomed Church of God Be saved,</p>
            <p>to sin no more. Be saved, to sin no</p>
            <p>more, Be saved, to sin no more; Till</p>
            <p>all the ransomed Church of God Be</p>
            <p>saved, to sin no more.</p>
    </div>
    <div style="margin-top:33px;">
            <p>E’er since by faith I saw the stream</p>
            <p>Thy flowing wounds supply,</p>
            <p>Redeeming love has been my theme,</p>
            <p>And shall be till I die. And shall be till</p>
            <p>I die, And shall be till I die;</p>
            <p>Redeeming love has been my theme,</p>
            <p>And shall be till I die.</p>
    </div>
    <div style="margin-top:33px;">
            <p>Then in a nobler, sweeter song, I’ll</p>
            <p>sing Thy power to save, When this</p>
            <p>poor lisping, stammering tongue Lies</p>
            <p>silent in the grave. Lies silent in the</p>
            <p>grave, Lies silent in the grave; When</p>
            <p>this poor lisping, stammering tongue</p>
            <p>Lies silent in the grave.</p>
    </div>

    <!---multicolor circle--->
    <div class="outer2">

    </div> 
    <div class="outer1">

    </div>

    <!---previous and next button--->      
    <div class="previous">
        <a href="song53.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="left">&#10174;</span></a>
    </div> 
    <div class="next">
        <a href="song55.php" style="color:black; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.288);"><span style="" class="right">&#10174;</span></a>
    </div>
    
    <!---javascript--->
    <script src="js/main.js"></script>

    <!---footer---> 
    <?php
    include ("layout/footer.php");
    ?>
</div>
    