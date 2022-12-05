<?php

    // File Connect To Database

    include "connect.php";

    // Routes 
    $tpl    = "incloude/template/"; // Templates Dirctory Path
    $css    = "layout/css/";
    $js     = "layout/js/";
    $images = "layout/images/";
    // $func   = 'includes/functions/';
    // $func   = 'includes/functions/';
    // $lang   = "includes/languages/";

    // include The Importatn File
    // include $func . 'functions.php';
    include $tpl . "header.php";
    // include $lang . "english.php";
    
    //  include navbar all File Exception Page contain varible noNavbar
    if (!isset($noNavbar)) {
        include $tpl . "navbar.php";
    }
 