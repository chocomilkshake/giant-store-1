<?php

class website_body
{

    public function head()
    {
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="img/Fevicon.png" type="image/png">
        <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
        <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php
    }

    public function banner_title($branch)
    {

        if ($branch === '1') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Manila, NCR
            </h1>
            <?php
        } elseif ($branch === '2') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Isabela, Region II
            </h1>
            <?php
        } elseif ($branch === '3') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Pangasinan, Region II
            </h1>
            <?php
        } elseif ($branch === '4') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Cavite, Region IV A
            </h1>
            <?php
        } elseif ($branch === '5') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Laguna, Region IV A
            </h1>
            <?php
        } elseif ($branch === '6') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Bicol, Region IV A
            </h1>
            <?php
        } elseif ($branch === '7') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Mindoro- Oriental, Region IV B
            </h1>
            <?php
        } elseif ($branch === '8') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Marinduque, Region IV B
            </h1>
            <?php
        } elseif ($branch === '9') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Romblon, Region IV B
            </h1>
            <?php
        } elseif ($branch === '10') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Palawan, Region IV B
            </h1>
            <?php
        } elseif ($branch === '10') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Iloilo, Region VI
            </h1>
            <?php

        } elseif ($branch === '11') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Capiz, Region VI
            </h1>
            <?php

        } elseif ($branch === '12') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Leyte, Region VI
            </h1>
            <?php

        } elseif ($branch === '13') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Bohol, Region VII
            </h1>
            <?php

        } elseif ($branch === '14') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Cebu, Region VII
            </h1>
            <?php

        } elseif ($branch === '15') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Bukidnon, Region X
            </h1>
            <?php

        } elseif ($branch === '16') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Misamis Occidental, Region X
            </h1>
            <?php

        } elseif ($branch === '17') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Cagayan De Oro, Region X
            </h1>
            <?php

        } elseif ($branch === '18') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Zamboangam, Region XI
            </h1>
            <?php

        } elseif ($branch === '19') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Davao, Region XI
            </h1>
            <?php

        } elseif ($branch === '20') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                General Santos, Region XII
            </h1>
            <?php

        } elseif ($branch === '21') {
            ?>
            <h1><span style="color:	#E34234;">CREMPCO Giant Store</span>
                Butuan, Region XII
            </h1>
            <?php

        } else {
        }
    }

    public function navigation($branch)
    {
        ?>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt="" style="width:100px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active">
                                <?php
                                if ($branch === '1') {
                                    echo '<a class="nav-link" href="index.php">Home</a>';
                                } elseif ($branch === '2') {
                                    echo '<a class="nav-link" href="isabela.php">Home</a>';
                                } elseif ($branch === '3') {
                                    echo '<a class="nav-link" href="pangasinan.php">Home</a>';
                                } elseif ($branch === '4') {
                                    echo '<a class="nav-link" href="cavite.php">Home</a>';
                                } elseif ($branch === '5') {
                                    echo '<a class="nav-link" href="laguna.php">Home</a>';
                                } elseif ($branch === '6') {
                                    echo '<a class="nav-link" href="bicol.php">Home</a>';
                                } elseif ($branch === '7') {
                                    echo '<a class="nav-link" href="mindoro.php">Home</a>';
                                } elseif ($branch === '8') {
                                    echo '<a class="nav-link" href="marinduque.php">Home</a>';
                                } elseif ($branch === '9') {
                                    echo '<a class="nav-link" href="romblon.php">Home</a>';
                                } elseif ($branch === '10') {
                                    echo '<a class="nav-link" href="palawan.php">Home</a>';
                                } elseif ($branch === '11') {
                                    echo '<a class="nav-link" href="iloilo.php">Home</a>';
                                } elseif ($branch === '12') {
                                    echo '<a class="nav-link" href="capiz.php">Home</a>';
                                } elseif ($branch === '13') {
                                    echo '<a class="nav-link" href="leyte.php">Home</a>';
                                } elseif ($branch === '14') {
                                    echo '<a class="nav-link" href="bohol.php">Home</a>';
                                } elseif ($branch === '15') {
                                    echo '<a class="nav-link" href="cebu.php">Home</a>';
                                } elseif ($branch === '16') {
                                    echo '<a class="nav-link" href="bukidnon.php">Home</a>';
                                } elseif ($branch === '17') {
                                    echo '<a class="nav-link" href="misamis.php">Home</a>';
                                } elseif ($branch === '18') {
                                    echo '<a class="nav-link" href="cdo.php">Home</a>';
                                } elseif ($branch === '19') {
                                    echo '<a class="nav-link" href="zamboanga.php">Home</a>';
                                } elseif ($branch === '20') {
                                    echo '<a class="nav-link" href="davao.php">Home</a>';
                                } elseif ($branch === '21') {
                                    echo '<a class="nav-link" href="gensan.php">Home</a>';
                                } elseif ($branch === '22') {
                                    echo '<a class="nav-link" href="butuan.php">Home</a>';
                                } else {
                                }
                                ?>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>


                    </div>
                </div>
            </nav>
        </div>
        <?php


    }

    public function footer()
    {
        ?>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                At Giant Crempco Store, our mission is to empower our members by
                                providing a collaborative,
                                equitable, and sustainable platform for online selling. We are dedicated to fostering
                                a community of entrepreneurs who share a commitment to quality, innovation, and mutual support.

                            </p>
                            <p>
                                By leveraging collective resources and expertise, we aim to enhance the visibility, reach, and
                                success of each member's business in the digital marketplace.
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h4>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/gallery/r1.jpg" alt=""></li>
                                <li><img src="img/gallery/r2.jpg" alt=""></li>
                                <li><img src="img/gallery/r3.jpg" alt=""></li>
                                <li><img src="img/gallery/r5.jpg" alt=""></li>
                                <li><img src="img/gallery/r7.jpg" alt=""></li>
                                <li><img src="img/gallery/r8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div-->
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>Unit 1 Eden Townhomes Eden St. Corner Pedro Gil St. Sta. Ana Manila</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    TBA
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    crempcoop@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="crempcophilippines.com" target="_blank">Counterpart Resource
                            Multi-Purpose Cooperative</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
        <?php
    }

    public function script()
    {
        ?>
        <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="vendors/skrollr.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/mail-script.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pagination.js"></script>
        <?php
    }




}