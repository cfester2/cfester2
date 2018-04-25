<?php
$baseUrl = 'http://localhost/nocinc18/';
$css = 'http://localhost/nocinc18/css/';
$js = 'http://localhost/nocinc18/js';
$plugins = 'http://localhost/nocinc18/plugins/';
?>
<section class="footer">
    <div class="footer-bar">
        <div class="container text-center">
            <i class="fa fa-2x fa-facebook"></i>                  
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $js; ?>bootstrap.min.js"></script>
<script>
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