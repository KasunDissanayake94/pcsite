<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/tmStickUp.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/ie.css">
    <![endif]-->
</head>
<body>
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
                            <ul class="list-inline header-top pull-left">
                                <a href="<?php echo base_url();?>index.php/link/go/1" style="color: white; margin: 20px">Home</a>
                                <a href="<?php echo base_url();?>index.php/link/go/2" style="color: white; margin: 20px">About</a>
                                <a href="<?php echo base_url();?>index.php/link/go/3" style="color: white; margin: 20px">Services</a>
                                <a href="<?php echo base_url();?>index.php/link/go/5" style="color: white; margin: 20px">Contacts</a>

                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h3>About Us</h3>
                <img src="<?php echo base_url();?>assets/images/page2_img.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper">
                    <p class="fwn"><br>WebStation Technologies is the newly established company in Battaramulla. Mainly we are focusing on selling and renting Computer Hardware, PCs and Laptops. At the same time we are working on fitting CCTV cameras.
                    <br><br>We are anxious to build-up business relations with your esteemed organization and would be much thankful if you could consider our company on the services. Our well trained and technically qualified staff focus on your need and act promptly to the entire satisfaction.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <article class="content_gray offset__1">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <h3>What We Offer</h3>
                </div>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">1</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Computer Accessories</a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">2</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Network Accessories</a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">3</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">CCTV Cameras</a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">4</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Door Lock System</a></div>
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">5</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">Security Alarm System</a></div>
                            
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="block-3">
                        <div class="count">6</div>
                        <div class="extra_wrapper">
                            <div class="text1"><a href="#">GPS Trackers</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h3>Our Staff</h3>
            </div>
            <div>We had well trained and technically qualified staffs.
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
                <div class="copyright"><span class="brand">WebStation Technology (Pvt) Ltd </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by<a class="fwn" href="http://ucsc.cmb.ac.lk/" rel="nofollow"><span class="brand"> university of colombo school of computing</span></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>