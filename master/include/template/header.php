<!DOCTYPE html>
<html 
    <?php 
        if(isset($ar) && $ar !=''){
            echo 'lang="ar"' ; 
        }else{
            echo 'lang="en"' ; 
        }
    ?>
>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if(isset($pageTitle) && $pageTitle !=''){
                echo ucfirst(getValue($pageTitle)); 
            }else{
                echo 'No Page Title' ; 
            }
        ?>
    </title>
    
    <link href="<?php echo $css?>all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $css?>fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $css?>bootstrap5.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $css?>style.css" rel="stylesheet" type="text/css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="<?php //echo $css?>bootstrap-editable.css" rel="stylesheet" type="text/css"> -->
</head>
<body
    <?php 
        if(isset($ar) && $ar !=''){
            echo 'class="rtl"' ; 
        }
    ?>
>
    