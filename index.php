<?php require_once 'const.php'; ?>
<?php
$css = BASE_URL . 'css/';
$js = BASE_URL . 'js';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';
?>
<?php require_once 'header.php'; ?>
<?php require_once 'topmenu.php'; ?>
<section class="intro">
    <div class="wrapper">
        <!--<div class="container">-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="col-lg-12" src="<?php echo $img; ?>slider/1.png" alt="...">                   
                </div>                
                <div class="item">
                    <img class="col-lg-12" src="<?php echo $img; ?>slider/2.png" alt="...">    
                </div>                
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--</div>-->
    </div>
</section>
<section id="services" class="services">
    <div class="wrapper">
        <div class="container">
            <div class="text-center section-intro">
                <h1>
                    SERVICES
                </h1>
                <p class="main-disc">
                    Some text here
                </p>
                <p class="sub-disc">
                    Some text here
                </p>
            </div>
            <div class="section-windows">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 thumbnail">
                        <div class="service-icons">
                            <img src="<?php echo $img; ?>service-icons-1.png" class="img-circle" />
                        </div>
                        <div class="section-window-heading">
                            <h3>
                                Computer repair
                            </h3>
                        </div>
                        <div class="section-window-description">
                            <p>
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="content">
    <section class="page-load-holder">
        <div class="wrapper">
            <div class="container">
            </div>
        </div>
    </section>
</div>
<section id="contact-us" class="contactus">
    <div class="wrapper">
        <div class="container">
            <div class="text-center section-intro">
                <h1>
                    CONTACT US
                </h1>
                <p class="main-disc">
                    Some text here
                </p>
                <p class="sub-disc">
                    Some text here
                </p>
            </div>
            <div class="col-md-6 col-xs-12">
                <!--<div class="col-xs-10 col-xs-offset-1">-->
                <h3>
                    Address
                </h3>
                <div class="col-md-4 col-sm-12 col-xs-12 map-height">
                    <h5>Colin Fester</h5>
                    <p>
                        Town Paxton, Illions                        
                    </p>
                    <p class="bottom-p">
                        Phone: (708) 325-8769
                        E-mail: <a>info@ccfcomuter.com</a>
                    </p>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 map-holder">
                    <div id="map"></div>
                </div>
                <!--</div>-->
            </div>
            <div class="col-md-6 col-xs-12">
                <!--<div class="col-xs-10 col-xs-offset-1">-->
                <h3>
                    Ask a question
                </h3>
                <form class="form-horizontal" method="POST" action="https://formspree.io/your@email.com">

                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group">  
                            <div class="col-md-6">
                                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
                            </div>
                            <div class="col-md-6">
                                <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">                     
                                <textarea class="form-control" id="textarea" name="question">Your Question</textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="g-recaptcha pull-left" data-sitekey="6Lc_SFQUAAAAACiUq9quNMZsjjNe6R3UXKo1ShPY"></div>                                
                                <button class="btn btn-warning pull-right">
                                    SEND
                                </button>
                            </div>

                        </div>

                    </fieldset>
                </form>

                <!--</div>-->
            </div>
        </div>
    </div>
</section>


<?php require_once 'footer.php'; ?>