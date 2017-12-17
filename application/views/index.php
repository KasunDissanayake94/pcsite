

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/script.js"></script>
    <script src="<?php echo base_url();?>assets/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.equalheights.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>assets/tmStickUp.js"></script>
    <script src="<?php echo base_url();?>assets/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>

    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="grid_12 rel">
                <h1>
                    <a href="index.html">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo alt">
                    </a>
                </h1>
                <ul class="sf-menu">
                    <li style="float: right;height: 70px;width: 70px;margin-left: 20px"><a href="<?php echo base_url();?>index.php/auth/cart"><img src="<?php echo base_url();?>assets/images/shopping_cart1.png" alt="Logo alt"></a></li>

                    <li style="float: right;margin-left: 20px"><a href="<?php echo base_url();?>index.php/auth/login"> Login </a></li>

                    <li style="float: right;margin-left: 20px"><?php if(isset($_SESSION['full_name'])){
                            echo "Hello ".$_SESSION['full_name']." ";
                        }
                        else{
                            echo "Hello Customer";
                        }?></li>




                </ul>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li class="current"><a href="<?php echo base_url();?>index.php/link/go/1">Home</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/2">About</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/3">Services</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/4">Blog</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/5">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page1_header">
        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <a href="<?php echo base_url();?>index.php/link/go/sales" class="banner "><div class="maxheight">
                            <div class="fa fa-globe"></div>Sales</div>
                    </a>
                    <a href="<?php echo base_url();?>index.php/link/go/marketing" class="banner "><div class="maxheight">
                            <div class="fa fa-lightbulb-o"></div>Marketing Rental</div>
                    </a>
                    <a href="<?php echo base_url();?>index.php/link/go/services" class="banner "><div class="maxheight1">
                            <div class="fa fa-cog"></div>Services</div>
                    </a>
                    <a href="<?php echo base_url();?>index.php/link/go/brands" class="banner "><div class="maxheight1">
                            <div class="fa fa-briefcase"></div>Brands</div>
                    </a>
                </div>
                <div class="grid_5">
                    <h2>Strong <br> Stable <br> Safe</h2>
                    We help you run your business  in a successful way
                </div>
            </div>
        </div>
    </section>
</header>
<div class="block-1">
  <div class="container">
    <div class="row">
      <div class="grid_3">
        <div class="block-1_count">1</div>
        Year of <br> Experience
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count"></div>
        Computer Hardware <br> Sellers
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count"></div>
        CCTV Camera <br> Fitting
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count"></div>
        Trusted Service<br> Crew
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <a href="#" class="support"><img src="images/support.png" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
    <div class="container">
        <div class="row">
            <div class="grid_10 preffix_1 ta__center">
                <div class="greet">
                    <h2 class="head__1">
                        Welcome
                    </h2>
                    <p>WebStation Technologies is the newly established company in Battaramulla. Mainly we are focusing on selling and renting Computer Hardware, PCs and Laptops. At the same time we are working on fitting CCTV cameras. Our official website will be helpful to you to find your needs and services. There is more friendly and active service crew with us. So welcome you all to visit our site and make your dreams true. </p>
                </div>
            </div>
        </div>
    </div>
    <article class="content_gray">
        <div class="container">
            <div class="row">
                <div class="grid_7">
                    <h3>Our Advantages</h3>
                    <div class="block-2">
                        <img src="<?php echo base_url();?>assets/images/page1_img1.jpg" alt="" class="img_inner fleft">
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Experience</a></div>
                            <p>We have one year experience and we can proudly said that we gave our service to Kandy Texile (Pvt) Ltd branches in Kadawatha, Kiribathgoda and Wallawatte.</p>
                            <br>
                        </div>
                    </div>
                    <div class="block-2">
                        <img src="<?php echo base_url();?>assets/images/page1_img2.jpg" alt="" class="img_inner fleft">
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Marketing</a></div>
                            <p>We assemble Desktop PCs / Branded PCs , all kind of Notebooks , Computer Accessories and Network Products</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="grid_4 preffix_1">
                    <h3></h3>
                    <p><h4>
                        We are anxious to build-up business relations with your esteemed organization and would be much thankful if you could consider our company on the services. Our well trained and technically qualified staff focus on your need and act promptly to the entire satisfaction.
                    </h4></p>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="row">
            <div class="grid_5">
                <h4>About Company</h4>
                <img src="<?php echo base_url();?>assets/images/page1_img3.jpg" alt="" class="img_inner fleft">
                <p>WebStation Technologies is the newly established company in Battaramulla.</p>
                <p class="offset__1">Mainly we are focusing on selling and renting Computer Hardware, PCs and Laptops.</p>
                <br>
                At the same time we are working on fitting CCTV cameras and assembling computer accessories and network products.
            </div>
            <div class="grid_4">
                <h4>Solutions</h4>
                <ul class="list-1">
                    <li>Computers Service and Maintenance </li>
                    <li>Server Repair and Maintenance</li>
                    <li>CCTV Camera Configuration and Installation</li>
                    <li>Door Lock Systems Configuration and Installation</li>
                    <li>Security Alarm System Configuration and Installation</li>
                    <li>GPS Trackers Configuration and Installation</li>
                </ul>
            </div>
            <div class="grid_3">
                <h4>Contact Info</h4>
                <address>
                    <ul class="cont_address">
                        <li>No:30, Wickramasighepura, Battaramulla</li>
                        <li>+94 77 723 9580/ +94 77 555 0223</li>
                        <li>Fax : 011 208 209 7</a></li>
                    </ul>
                </address>
            </div>
        </div>
    </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">WebStation Technology (Pvt) Ltd</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by <a class="fwn" href="http://ucsc.cmb.ac.lk/" rel="nofollow"><span class="brand"> University of Colombo School of Computing</span></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>