<?php
    // $ar="yes" ; 
    $pageTitle = 'dashboard' ; 
    include 'init.php' ;
?>
    <div class="container-fluid">
        <div class="row">
            <nav class="sidebar close col-2">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <i class='bx bx-user bx-burst icon'></i>
                        </span>

                        <div class="text logo-text">
                            <span class="name"><?php echo strtoupper(getValue("admin")) ; ?></span>
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
                                <a href="#">
                                <i class='bx bx-category bx-burst icon' title='category'></i>
                                <span class="text nav-text"><?php echo ucfirst(getValue("category")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bx-table bx-burst icon' title='table'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("table")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bx-money bx-burst icon' title='tax'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("tax")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bxl-product-hunt bx-burst icon' title='product'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("product")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bx-user-plus bx-burst icon' title='users'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("users")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bx-edit bx-burst icon' title='order'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("order")) ; ?></span>
                                </a>
                            </li>

                            <li class="">
                                <a href="#">
                                    <i class='bx bx-wallet bx-burst icon' title='biling'></i>
                                    <span class="text nav-text"><?php echo ucfirst(getValue("biling")) ; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out bx-burst icon' title='logout'></i>
                                <span class="text nav-text"><?php echo ucfirst(getValue("logout")) ; ?></span>
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
                        <div class="row">
                            <h2>
                                <?php echo ucfirst(getValue("dashboard")) ; ?>
                            </h2>
                        </div>    
                        
                        <div class="row widget">
                                <div class="col-sm-2 col-8 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("todaySales")) ; ?>
                                        
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                                <div class="col-sm-2 col-8 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("yesterdaySales")) ; ?>
                                        
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                                <div class="col-sm-2 col-8 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("last7DaysSales")) ; ?>
                                        
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                                <div class="col-sm-2 col-8 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("allTimesSales")) ; ?>
                                        
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                            
                        </div>

                        <div class="row tables-area">
                            <h2><?php echo ucfirst(getValue("TableStatusArea")) ; ?></h2>
                            <!-- <div class=""> -->
                                <div class="col-sm-2 col-4 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("table")).' 1' ; ?>
                                    </div>
                                    <div>
                                        <?php echo '2 '.ucfirst(getValue("person")); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-4 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("table")).' 1' ; ?>
                                    </div>
                                    <div>
                                        <?php echo '2 '.ucfirst(getValue("person")); ?>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-4 mb-2 <?php if(isset($ar) && $ar != ''){ echo 'text-end' ;}?>">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?php echo ucfirst(getValue("table")).' 1' ; ?>
                                    </div>
                                    <div>
                                        <?php echo '2 '.ucfirst(getValue("person")); ?>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php 
    include $template .'footer.php' ; 
?>