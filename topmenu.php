<?php require_once 'const.php'; ?>
<?php
$css = BASE_URL . 'css/';
$js = BASE_URL . 'js';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
?>
<nav class="navbar navbar-default <?php echo $page; ?> navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">CCF COMPUTING</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php echo $page == 'home' ? 'class="active"' : ''; ?>><a href="<?php echo BASE_URL; ?>">Home <?php echo $page == 'home' ? '<span class="sr-only">(current)</span>' : ''; ?></a></li>
                <li <?php echo $page == 'services' ? 'class="active"' : ''; ?>><a href="services.php?page=services">Services <?php echo $page == 'services' ? '<span class="sr-only">(current)</span>' : ''; ?></a></li>
                <!--<li <?php echo $page == 'aboutus' ? 'class="active"' : ''; ?>><a href="aboutus.php?page=aboutus">About Us <?php echo $page == 'aboutus' ? '<span class="sr-only">(current)</span>' : ''; ?></a></li>-->
                <li <?php echo $page == 'testimonial' ? 'class="active"' : ''; ?>><a href="testimonial.php?page=testimonial">Testimonials <?php echo $page == 'testimonial' ? '<span class="sr-only">(current)</span>' : ''; ?></a></li>
                <li <?php echo $page == 'contactus' ? 'class="active"' : ''; ?>><a href="contactus.php?page=contactus">Contact <?php echo $page == 'contactus' ? '<span class="sr-only">(current)</span>' : ''; ?></a></li>                
            </ul>            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
