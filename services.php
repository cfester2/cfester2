<?php require_once 'const.php'; ?>
<?php
$css = BASE_URL . 'css/';
$js = BASE_URL . 'js';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';
?>
<?php require_once 'header.php'; ?>
<?php require_once 'topmenu.php'; ?>
<section id="services" class="services">
    <div class="wrapper">
        <div class="container">
            <div class="text-center section-intro">
                <h1>
                    SERVICES
                </h1>
                <p class="main-disc">
                    All your computer issues can be fixed
                </p>
                <p class="sub-disc">
                    Experts are here to help you
                </p>
            </div>
            <div class="section-windows">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <a class="service-pages" href="computer_repair.php">
                                <img src="<?php echo $img; ?>../images/services/repair.png" class="img-circle" />
                            </a>

                        </div>
                        <div class="section-window-heading">

                            <a class="service-pages" href="computer_repair.php">
                                <h3>
                                    Computer repair
                                </h3>
                            </a>

                        </div>
                        <div class="section-window-description">
                            <p>
                               Everything from major problems to simple upgrades,
                               we can fix and help with any of your electronic issues.

                        

                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>../images/services/recovery.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                Deleted a file on your computer? Formatted by mistake? We can help you restore all of your files.
                            </p>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>../images/services/discounts.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Discount Software & Hardware
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                               We have the cheapest software and hardware. Antivirus to desktops, lapstops, and upgrades such as memory and hard drives.
                            </p>



                
                        </div>
                    </div>
                </div>               
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>../images/services/consulting.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Consulting
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                               We can advise you on any of your computer related questions. If you would like a webpage made,
                               need to setup or expand your network, or just wondering what type of anit-virus program is the best
                               now a days. We are here to help you with everything you might want or need.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'footer.php'; ?>
<script>
    $(document).ready(function () {
        $('#services .thumbnail').on('mouseover', function () {
            $(this).css({
                borderTop : '10px solid #243d41',
            });
        });
        $('#services .thumbnail').on('mouseout', function () {
            $(this).css({
                border : 'none'
            });
        });
    });
</script>