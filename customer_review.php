<?php require_once 'const.php'; ?>
<?php
$css = BASE_URL . 'css/';
$js = BASE_URL . 'js';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';
?>
<?php require_once 'header.php'; ?>
<?php require_once 'topmenu.php'; ?>

<section class="customer-review">
    <div class="wrapper">
        <div class="container">
            <div class="text-center section-intro">
                <h1>
                    Review
                </h1>
                <p class="main-disc">
                    Some text here
                </p>
                <p class="sub-disc">
                    Some text here
                </p>
            </div>

            <div class="col-md-12 col-xs-12">
                <!--<div class="col-xs-10 col-xs-offset-1">-->
                <h3 class="text-center">
                    Add a review
                </h3>
                <form class="form-horizontal" method="POST" action="https://formspree.io/your@email.com">

                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group">  
                            <div class="col-md-4">
                                <lable>
                                    Name
                                </lable>
                                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    Email
                                </lable>
                                <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    Rating
                                </lable>
                                <div class="rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    Country
                                </lable>
                                <input id="city" name="country" type="text" placeholder="Country" class="form-control input-md">
                                <br>
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    City
                                </lable>
                                <input id="city" name="city" type="text" placeholder="City" class="form-control input-md">
                                <br>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">                     
                                <textarea class="form-control" id="textarea" name="question">Your Comment</textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="g-recaptcha pull-left" data-sitekey="6Lc_SFQUAAAAACiUq9quNMZsjjNe6R3UXKo1ShPY"></div>                                
                                <br>
                                <button class="btn btn-warning pull-right">
                                    Add
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