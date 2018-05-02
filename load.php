<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $view = file_get_contents($page . '.php');
    echo $view;
}
?>