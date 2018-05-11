<?php require_once 'const.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $to = "info@ccfcomuter.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $subject = "Contact Us Form";
    $rating_count = $_POST['rating_count'];
    $message = $first_name . " In $country - $city wrote the following:" . "\n\n" . $_POST['review'] . "\n\n" . "And given rating of $rating_count starts";
//    echo $rating_count;
//    exit();

    $headers = "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        ?>
        <script>
            alert('Your email received. We will get back to you soon!');
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Your email not received. Hope We have an issue please try gain later!');
        </script>
        <?php
    }
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
                                <div id="rating" class='rating-stars text-center'>
                                    <ul id='stars'>
                                        <li class='star' title='Poor' data-value='1'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Fair' data-value='2'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Good' data-value='3'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='Excellent' data-value='4'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                        <li class='star' title='WOW!!!' data-value='5'>
                                            <i class='fa fa-star fa-fw'></i>
                                        </li>
                                    </ul>
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
                                <input type="hidden" id="rating_count" name="rating_count" />
                                <input type="submit" value='Submit' name='submit' class="btn btn-warning pull-right">


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
<script>
    $(document).ready(function () {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function () {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function (e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function () {
            $(this).parent().children('li.star').each(function (e) {
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function () {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            $('#rating_count').val(ratingValue);
//            var msg = "";
//            if (ratingValue > 1) {
//                msg = "Thanks! You rated this " + ratingValue + " stars.";
//            } else {
//                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
//            }
            //responseMessage(msg);

        });


    });


    function responseMessage(msg) {
        $('.success-box').fadeIn(200);
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }
</script>