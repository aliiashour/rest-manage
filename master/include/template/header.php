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
    <div class="container-fluid">
        <div class="row">
            <nav class="sidebar close col-2">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <i class='bx bx-user bx-burst icon'></i>
                        </span>

                        <div class="text logo-text">
                            <span class="name">
                                <a href="index.php" style="text-decoration:none">
                                    <?php echo strtoupper(getValue("admin")) ; ?>
                                </a>
                            </span>
                        </div>
                    </div>

                    <i class='bx bx-chevron-right toggle'></i>
                </header>

                <div class="menu-bar">
                    <div class="menu">

                        <!-- <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="<?php //echo ucfirst(getValue("search...")) ; ?>">
                        </li> -->

                        <ul class="menu-links" style="padding-left:0px">
                            <li class="">
                                <a href="category.php">
                                    <i class='bx bx-category bx-burst icon' title='category'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("category")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="table.php">
                                    <i class='bx bx-table bx-burst icon' title='table'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("table")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="tax.php">
                                    <i class='bx bx-money bx-burst icon' title='tax'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("tax")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="product.php">
                                    <i class='bx bxl-product-hunt bx-burst icon' title='product'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("product")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="users.php">
                                    <i class='bx bx-user-plus bx-burst icon' title='users'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("users")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="order.php">
                                    <i class='bx bx-edit bx-burst icon' title='order'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("order")) ; ?>
                                    </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="biling.php">
                                    <i class='bx bx-wallet bx-burst icon' title='biling'></i>
                                    <span class="text nav-text">
                                        <?php echo ucfirst(getValue("biling")) ; ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="">
                            <a href="logout.php">
                                <i class='bx bx-log-out bx-burst icon' title='logout'></i>
                                <span class="text nav-text">
                                    <?php echo ucfirst(getValue("logout")) ; ?>
                                </span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon' title='might mood'></i>
                                <i class='bx bx-sun icon sun' title='sun mode'></i>
                            </div>
                            <span class="mode-text text"><?php echo ucfirst(getValue("darkMode")) ; ?></span>

                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>
                        
                    </div>
                </div>

            </nav>
            <section class="home col-10">
                <div class="text">
                    <nav class="navbar navbar-expand navbar-light bg-light">
                        <div class="container-fluid justify-content-end">
                            <div class="row">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?php echo ucfirst(getValue("master")) ; ?>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class='bx bx-user bx-burst icon' title='master'></i>
                                                        <span style="margin-left:8px;"><?php echo ucfirst(getValue("master")) ; ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class='bx bx-cog bx-burst icon' title='setting'></i>
                                                        <span style="margin-left:8px;"><?php echo ucfirst(getValue("setting")) ; ?></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class='bx bx-log-out bx-burst icon' title='logout'></i> 
                                                        <span style="margin-left:8px;"><?php echo ucfirst(getValue("logout")) ; ?></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="container-fluid">
    