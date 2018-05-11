<?php require_once 'const.php'; ?>
<?php
if (isset($_POST['submit'])) {
    error_reporting(0);
    $to = "contact@ccfcomputing.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $phone = $_POST['phone'];
    $preferred_reply = $_POST['preferred_reply'];
    $first_name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $question = $_POST['question'];
    $subject = "Contact Us Form";
    $subscribed = isset($_POST['subscribed']) ? 'YES' : 'NO';
//    $rating_count = $_POST['rating_count'];
    $message = $first_name . " In $country - $city wrote the following:" . "\n\n"
            . "Sender Email: $from" . "\n\n"
            . "Sender Phone Number: $phone" . "\n\n"
            . "Sender Preferred Reply: $preferred_reply" . "\n\n"
            . "Comment: $question" . "\n\n"
            . "\n\n" . "Subscription for news letter: $subscribed";
//    echo $rating_count;
//    exit();
    if (isset($_POST['subscribed']) AND $_POST['subscribed'] == 'Yes') {
        $con = mysqli_connect("localhost", DBUSER, DBPASS, DBDB);
// Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            mysqli_query($con, "INSERT INTO subscribers (name,country,city,email) 
VALUES ('$first_name','$country','$city','info@ccfcomputing.com')");
            mysqli_close($con);
        }
    }
    $headers = "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        ?>
        <script>
            alert('Thank you for your question,Your E-Mail has been sent and we will get in touch with you within 24 hours');
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Your email not received. Hope We have an issue please try gain later!');
        </script>
        <?php
    }
    header("Location: " . BASE_URL . 'thankyou.php');
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
                    Contact
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

                <div class="col-md-6 col-sm-6 col-xs-12 map-holder">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 map-holder">
                    <video style="height: 250px; width: 100%" controls>
                        <source src="<?php echo $img; ?>Computer_Repair_Animated.mp4" type="video/mp4">
                        <!--<source src="movie.ogg" type="video/ogg">-->
                        Your browser does not support the video tag.
                    </video>
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
                            <div class="form-group contact-page-inputs">  
                                <div class="col-md-4">
                                    <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                                <div class="col-md-4">
                                    <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required="" minlength="6" maxlength="50">
                                </div>                               
                                <div class="col-md-4">
                                    <input id="textinput" name="phone" type="text" placeholder="Phone number" class="form-control input-md" minlength="8" maxlength="20">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-6">
                                    <input id="textinput" name="country" type="text" placeholder="Country" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                                <div class="col-md-6">
                                    <input id="textinput" name="city" type="text" placeholder="City" class="form-control input-md" required="" minlength="3" maxlength="50">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-12">                     
                                    <textarea class="form-control" id="textarea" name="question" required="" minlength="20" maxlength="250"  placeholder="Your Question"></textarea>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">

                            </div>
                            <!--                            <div class="form-group">
                                                            <label class="col-md-4 control-label pull-right" for="radios">Preferred reply</label>
                                                            <div class="clearfix"></div>
                                                            <div class="col-md-4 pull-right text-right">
                                                                <div class="radio">
                                                                    <label for="radios-0">
                                                                        <input type="radio" name="preferred_reply" id="radios-0" value="Email" checked="checked">
                                                                        Email
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="radios-1">
                                                                        <input type="radio" name="preferred_reply" id="radios-1" value="Phone">
                                                                        Phone
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="form-group">
                                <div class="col-md-4 pull-left text-right">
                                    <div class="checkbox">
                                        <label for="subscribed" class="">
                                            <input id="subscribed" type="checkbox" name="subscribed" value="Yes">
                                            Subscribe to our News Letter
                                        </label>
                                    </div>                                
                                </div>
                                <label class="col-md-4 control-label " for="radios">Preferred reply</label>
                                <div class="col-md-4 pull-right text-right">
                                    <label class="col-md-6 control-label " for="radios-0">
                                        <input type="radio" name="preferred_reply" id="radios-0" value="Email" checked="checked">
                                        Email
                                    </label>
                                    <label class="col-md-6 control-label " for="radios-1">
                                        <input type="radio" name="preferred_reply" id="radios-1" value="Phone">
                                        Phone
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <!--<div class="g-recaptcha pull-left" data-sitekey="6Lc_SFQUAAAAACiUq9quNMZsjjNe6R3UXKo1ShPY"></div>-->                                
                                    <!--                                    <button class="btn btn-warning pull-right">
                                                                            SEND
                                                                        </button>-->
                                    <br>
                                    <br>
                                    <input type="submit" value='' name='submit' class="btn pull-right" style="background-image: url(<?php echo $img; ?>send_button.gif); width: 150px; height: 43px;">
                                </div>

                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 map-height">

                    Colin Fester
                    <br>
                    <br>
                    Town: Paxton, Illinois
                    <br>
                    <br>
                    Phone: (747) 217-2171 
                    <br>
                    <br>
                    E-mail: <a style="color: #fff; text-decoration: none;" href="mailto:contact@ccfcomputing.com?Subject=question%20from%20ccscomputing.com">contact@ccfcomputing.com</a>
<!--                    <p>
                        Town Paxton, Illions                        
                    </p>
                    <p class="bottom-p">                        
                        Phone: (747) 217-2171
                        <br>
                        E-mail: <a>info@ccfcomuter.com</a>
                    </p>-->
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <br><br>
            <br><br>
            <br><br>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
<script>
    $(document).ready(function () {
//        $('#textarea').on('focus', function () {
//            var value = $('#textarea').html();
//            if (value == 'Your Question') {
//                $('#textarea').html('');
//            }
//        });
    });
</script>