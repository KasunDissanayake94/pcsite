

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marketing Rental</title>
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
    <script>
        $('ul.sf-menu li.dropdown').hover(function() {
            print("sdvvv");

            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
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
                            <ul class="sf-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="current"><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
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
<!--==============================
              content
=================================-->

      <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
          <div class="container">

                      <h3>Marketing Rental</h3>


                      <ul class="sf-menu">
                          <li><label style="color: black;"><a href="index.html" >Notebooks</a></label></li>

                          <li class="dropdown"><label style="color: black;">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a></label>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                              </ul>
                          </li>



                          <li><label style="color: black;"><a href="index.html">Desktops</a></label></li>
                          <li><label style="color: black;"><a href="index.html">Projectors</a></label></li>
                          <li><label style="color: black;"><a href="index.html">Projector Screen</a></label></li>
                          <li><label style="color: black;"><a href="index.html">LED TV</a></label></li>
                      </ul>

                  <div class="clear"></div>





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
                <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
