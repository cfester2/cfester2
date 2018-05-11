<?php require_once 'const.php'; ?>
<?php

if (isset($_POST['submit'])) {
    $to = "info@ccfcomuter.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $subject = "Contact Us Form";
    $message = $first_name . " In $country - $city wrote the following:" . "\n\n" . $_POST['review'];

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
                <form class="form-horizontal" method="POST" action="">

                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group">  
                            <div class="col-md-4">
                                <lable>
                                    Name
                                </lable>
                                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md" required="" minlength="3" maxlength="50">
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    Email
                                </lable>
                                <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required="" minlength="6" maxlength="50">
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
                                <input id="city" name="country" type="text" placeholder="Country" class="form-control input-md" required="" minlength="3" maxlength="50">
                                <br>
                            </div>
                            <div class="col-md-4">
                                <lable>
                                    City
                                </lable>
                                <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" required="" minlength="3" maxlength="50">
                                <br>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">                     
                                <textarea class="form-control" id="textarea" name="review" required="" minlength="20" maxlength="250">Your Comment</textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="g-recaptcha pull-left" data-sitekey="6Lc_SFQUAAAAACiUq9quNMZsjjNe6R3UXKo1ShPY"></div>                                
                                <br>
                                <button class="btn btn-warning pull-right">
                                    Submit
                                </button>
                            </div>

                        </div>

                    </fieldset>
                </form>

                <!--</div>-->
            </div>
            <div class="col-md-12">
                <h3>
                    Customer Reviews
                </h3>
                <div class="panel-body panel-danger">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <table style="border: 0" class="table-condensed">
                            <tr>
                                <td>
                                    Name
                                <td>
                                <td>
                                    G C Perera 
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    Country 
                                <td>
                                <td>
                                    USA
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                <td>
                                <td>
                                    Diago
                                <td>
                            </tr>                                                                                      
                        </table>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div>
                            Comment: some text test some text test some text test 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <table style="border: 0" class="table-condensed">
                            <tr>
                                <td>
                                    Name
                                <td>
                                <td>
                                    G C Perera 
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    Country 
                                <td>
                                <td>
                                    USA
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                <td>
                                <td>
                                    Diago
                                <td>
                            </tr>                                                                                      
                        </table>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div>
                            Comment: some text test some text test some text test 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <table style="border: 0" class="table-condensed">
                            <tr>
                                <td>
                                    Name
                                <td>
                                <td>
                                    G C Perera 
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    Country 
                                <td>
                                <td>
                                    USA
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                <td>
                                <td>
                                    Diago
                                <td>
                            </tr>                                                                                      
                        </table>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div>
                            Comment: some text test some text test some text test 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'footer.php'; ?>