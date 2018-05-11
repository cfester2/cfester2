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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CCF Computing</title>

        <!-- Bootstrap -->
        <link href="<?php echo $css; ?>bootstrap.min.css" rel="stylesheet">                
        <link href="<?php echo $css; ?>main.css" rel="stylesheet">
        <link href="<?php echo $css; ?>reset.css" rel="stylesheet">
        <link href="<?php echo $css; ?>fontawesome/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    </head>
    <body class='<?php echo $page; ?>'>