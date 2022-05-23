<?php
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'ar';
}

if(isset($_GET['lang']) && !empty($_GET['lang'])){
    if($_GET['lang'] == 'ar')
        $_SESSION['lang'] = 'ar';
    else if($_GET['lang'] == 'en')
        $_SESSION['lang'] = 'en';
}