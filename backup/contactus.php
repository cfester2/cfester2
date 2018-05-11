<?php require_once 'const.php'; ?>
<?php

if (isset($_POST['submit'])) {
    $to = "info@ccfcomuter.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $subject = "Contact Us Form";
    $message = $first_name . " In $country - $city wrote the following:" . "\n\n" . $_POST['question'];

    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);

    header("Location: " . BASE_URL);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<?php

$css = BASE_URL . 'css/';
$js = BASE_URL . 'js';
$plugins = BASE_URL . 'plugins/';
$img = BASE_URL . 'images/';
?>
<?php require_once 'header.php'; ?>
<?php require_once 'topmenu.php'; ?>
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
            <div class="col-md-12 col-xs-12">
                <!--<div class="col-xs-10 col-xs-offset-1">-->
                <h3>
                    <!--Address-->
                </h3>

                <div class="col-md-12 col-sm-12 col-xs-12 map-holder">
                    <div id="map"></div>
                </div>
                <!--</div>-->
            </div>
            <div class="col-md-12 col-xs-12">
                <!--<div class="col-xs-10 col-xs-offset-1">-->
                <h3>
                    <!--Ask a question-->
                </h3>
                <div class="col-lg-8 col-xs-12">
                    <form class="form-horizontal" method="POST" action="">

                        <fieldset>
                            <!-- Form Name -->
                            <!-- Text input-->
                            <div class="form-group">  
                                <div class="col-md-6">
                                    <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                                <div class="col-md-6">
                                    <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required="" minlength="6" maxlength="50">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-6">
                                    <input id="textinput" name="country" type="text" placeholder="Country" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                                <div class="col-md-6">
                                    <input id="textinput" name="city" type="text" placeholder="City" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                                <div class="col-md-12">                     
                                    <textarea class="form-control" id="textarea" name="question" required="" minlength="20" maxlength="250">Your Question</textarea>
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
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 map-height">
                    <h5>Colin Fester</h5>
                    <p>
                        Town Paxton, Illions                        
                    </p>
                    <p class="bottom-p">                        
                        Phone: (747) 217-2171
                        <br>
                        E-mail: <a>info@ccfcomuter.com</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php require_once 'footer.php'; ?>