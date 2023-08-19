<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-left">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
                <ul class="nav1">
                    <li><a href="index.php" class="inactive" onclick="toggleActive()">HOME</a></li>
                    <li><a href="about.php" class="inactive" onclick="toggleActive()">ABOUT</a></li>
                    <li><a href="food-available.php" class="inactive" onclick="toggleActive()"> AVAILABLE FOOD</a></li>
                    
                    <!--<li><a href="contact.php" class="inactive" onclick="toggleActive()">CONTACT</a></li>-->
                    <li><a href="donor/login.php" class="inactive" onclick="toggleActive()">DONOR</a></li>
                    <li><a href="admin/login.php" class="inactive" onclick="toggleActive()">ADMIN</a></li>
                    <li><!-- Translation -->
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,ta',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!--Translation -->
                    </li>
                    
                </ul>
                <!-- script for menu -->
                    <script> 
                        $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                         // Animation complete.
                        });
                        });
                    </script>
                <!-- //script for menu -->

                
        </div>
        <div class="header-right">
            <a href="index.php"><img src="images/logo_new.png" alt="" height="200" width="280" style="border: 2px solid #000"></a>
        </div>

        

        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->