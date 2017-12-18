<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/contact-form.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/messageForm.css">
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/tmStickUp.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.totop.js"></script>
    <script src="<?php echo base_url();?>assets/js/TMForm.js"></script>
    <script src="<?php echo base_url();?>assets/js/modal.js"></script>
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
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container"><!-- startr container -->
        <div class="row"><!-- start row of map and bellow detils -->
            <div class="grid_12"><!-- get the 12 gride and put in the map -->
                <h3>Contacts</h3>
              <!--   <div class="map">
                    <figure class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
                    </figure>
                </div> -->
                <div id="map" style="width:1300px;height:400px;background:yellow"></div>

                    <script>
                    function myMap() {
                    var mapOptions = {
                        center: new google.maps.LatLng(6.8819751,79.9363298),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.HYBRID
                    }
                    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                     var marker = new google.maps.Marker({
                      position: {lat: 6.8819751, lng: 79.9363298},
                      map: map,
                      title: 'Hello World!'});

                    }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqUjBqRBBLDzYkF6krNZjOmi2MswG3yK4&callback=myMap"></script>


                

        </div>
            <div class="grid_3"><!-- other details start -->
                <h3 class="head__1">Address:</h3>
                <address class="text3">
                    <a href="https://www.google.lk/maps/place/Battaramulla/@6.9000592,79.9117393,15z/data=!3m1!4b1!4m5!3m4!1s0x3ae25755e928e7ff:0x85482fe919ac9ca1!8m2!3d6.8979941!4d79.9222869">Webstation Technology,<br>No:30,<br>Wickramasighepura,<br>Battaramulla.</a>
                </address>
            </div>
            <div class="grid_3">
                <h3 class="head__1">Phone:</h3>
                <div class="text3">
                    0777239580<br>0775550223
                </div>
            </div>
            <div class="grid_3">
                <h3 class="head__1">Fax: </h3>
                <div class="text3">
                    <a >011 208 209 7</a>
                </div>

            </div>
            <div class="grid_3">
                <h3 class="head__1">Gmail: </h3>
                <div class="text3">
                    <a href="#"></a><br><a href="#">Download</a>
                </div>
            </div><!-- end of other details -->
        </div><!-- end of the map and other details row -->
        <br>
        <br>
        <hr>

        <!-- set flash data msg -->
        <?php
          if($this->session->flashdata('msg')){
            echo "<h3>".$this->session->flashdata('msg')."</h3>";
            $this->session->set_flashdata('msg','');

          }

        ?>
     
        
     <!--  message box -->  
  <section id="contact" style="width: 1300px">
    <div class="row">
      <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>support is available for all</h3>

        
       <!-- <?php// if($_SESSION['sendmessage']==false){

      //           echo "message is not send";
      //           unset($_SESSION['sendmessage']);
      //   } elseif ($_SESSION['sendmessage']==true) {
      //          echo "message send successfuly";
      //          $_SESSION['sendmessage']='';
      //   } ?>

         -->








      </div>
      <div class="contact-section">
      <div class="container">

        <?php echo validation_errors();?>
       <?php echo form_open('sendMessage/send');?>

          <div class="grid_6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Your Name</label><br>
                <input type="text" class="form-control" style="width: 500px" id="" placeholder=" Enter Name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email Address</label><br>
                <input type="email" class="form-control" style="width: 500px" id="exampleInputEmail" placeholder=" Enter Email id" name="email">
              </div>  
              <div class="form-group">
                <label for="telephone">Mobile No.</label><br>
                <input type="tel" class="form-control" style="width: 500px" id="telephone" placeholder=" Enter 10-digit mobile no." name="mno">
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <label for ="description">Message</label><br>
                <textarea  class="form-control" style="height:150px; width: 500px" id="description" placeholder="Enter Your Message" name="message"></textarea>
              </div>
              <div>
                <br>
                <br>
                <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
              </div>
            </div>


        <?php echo form_close();?>
      </div>
    </div>
    </section>
      <!-- <div class="row">
        
            <div class="grid_12">
                <?php echo form_open('sendmessage/sendmessage');?>
                <div class="form-group">

                      <div class="grid_2">
                        <label class="name">
                                <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />      
                        </label>
                      </div>

                      <div class="grid_4">
                         <label class="email">
                                <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                            
                          </label>
                      </div>

                      <div class="grid_2">
                         <label class="phone">
                            <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                            
                        </label>
                      </div>

                </div>
                <?php echo form_close();?>
            </div>
      </div> -->
               
                <!-- <form id="contact-form">

                    <div class="contact-form-loader"></div>
                    <fieldset>
                        <label class="name">
                            <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid name.</span>
                        </label>

                        <label class="email">
                            <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid email.</span>
                        </label>
                        <label class="phone">
                            <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid phone.</span>
                        </label>

                        <label class="message">
                            <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*The message is too short.</span>
                        </label>
                        <div class="clear"></div>
                        <div>
                            <a href="#" class="btn" data-type="submit">Send e-mail</a>
                        </div>
                    </fieldset>
                  </form> -->
                  
          
                 

       

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
                    <div class="sub-copy">Website designed by <a class="fwn" href="http://ucsc.cmb.ac.lk/" rel="nofollow"><span class="brand"> university of colombo school of computing</span></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>