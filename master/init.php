<?php
    //init.php File -> to set main settings in the master field

    /**
     * first    -> set the database connection
     * second   -> set the field paths
     * third    -> add any document i need
     *              -> function files
     *              -> multi language
     * fourth   -> add the header file
     */

     //first
     include "connect.php" ; 

     //second
     $function  = "include/function/" ; 
     $language  = "include/language/" ; 
     $template  = "include/template/" ; 
     $css       = "layout/css/" ; 
     $js        = "layout/js/" ;


     //third
        //01
    include $function . 'functions.php' ; 

        //02
    if(isset($ar)){
        include $language .'ar.php' ; 
    }else{
        include $language .'en.php' ; 
    }

    //fourth
    include $template . 'header.php' ; 
   
?>