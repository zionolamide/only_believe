<?php 
  include ("layout/header_settings.php");
?>
<link href="styles/settings.css" rel="stylesheet">

<div class="row">
    <div class="column">
        <div class="container" style="margin-top: 70px;">
            <ul>
                <li><a id="google_translate_element" style="color:rgb(184, 244, 252);margin-right: 23px;" ></a></li>
                <li><a href="#">Night Mode</a></li>
                <li><a href="#">Font Size</a></li>
            </ul>  
            <?php
              include ("layout/footer.php");
             ?>    
             <script type="text/javascript">
                function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
        </div>
    </div>
    <div class="column">
    </div>
    
<script src="js/main.js">
</script> 

</div>

        
     