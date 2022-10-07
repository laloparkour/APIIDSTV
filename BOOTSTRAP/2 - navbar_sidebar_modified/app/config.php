<?php 

    session_start();

    if (!isset( $_SESSION['super_token'] )) {
        $_SESSION['super_token']  = 
        md5( uniqid( mt_rand(), true ) );
    }


    if (!defined('BASE_PATH')) {
        define('BASE_PATH', 'http://localhost/APIIDSTV/BOOTSTRAP/2%20-%20navbar_sidebar_modified/');
    }

/* 
    rc^v^8RJ182An */
    
?>