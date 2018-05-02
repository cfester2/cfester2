<?php require_once 'const.php'; ?>
<?php
$css = BASE_URL . 'css/';
$js = BASE_URL . 'js/';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div id="baseurl" data-baseurl="<?php echo BASE_URI; ?>"></div>
<section class="footer <?php echo $page; ?>">
    <div class="footer-bar">
        <div class="container text-center">
            <div class="social-holder">
                <div class="social"><img src="<?php echo $img; ?>fb.png" /></div>                  
                <!--<div class="social"><img src="<?php echo $img; ?>tw.png" /></div>-->                  
                <!--<div class="social"><img src="<?php echo $img; ?>g+.png" /></div>-->                  
                <!--<div class="social"><img src="<?php echo $img; ?>in.png" /></div>-->                  
            </div>
            <div class="clearfix"></div>
            <p>&COPY; Copyright <?php echo date('Y'); ?> | <a style="text-decoration: none; color: #fff;" href="<?php echo BASE_URL; ?>">CCF Computing</a></p>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $js; ?>bootstrap.min.js"></script>
<script>
    $(document).ready(function () {

    });
    function initMap() {
        var uluru = {lat: 40.521046, lng: -88.070407};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu81sZQ6Nfme3xs0nsOcE7f6f6gpMyaEY&callback=initMap">
</script>
</body>
</html>
