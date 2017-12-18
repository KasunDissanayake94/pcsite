

<!DOCTYPE html>
<html>


<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle1.css">
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body class="home">
<div class="display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">
                <a href="home.html"><img src="<?php echo base_url();?>index.php/assets/images/logo" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="<?php echo base_url();?>index.php/assets/images/logo" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/marketing/go/notebook"><span class="hidden-xs hidden-sm">Notebooks</span></a></li>
                    <li class="active"><a href="<?php echo base_url();?>index.php/marketing/go/desktop"><span class="hidden-xs hidden-sm">Desktops</span></a></li>
                    <li><a href="<?php echo base_url();?>index.php/marketing/go/computer_accessories"><span class="hidden-xs hidden-sm">Computer Accessories</span></a></li>
                    <li><a href="<?php echo base_url();?>index.php/marketing/go/network_accessories"><span class="hidden-xs hidden-sm">Network Accessories</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header style="height:70px">
                    <div class="col-md-7">



                        <div class="title hidden-xs hidden-sm">
                            <h3></h3>
                        </div>

                        <!-- <div class="search hidden-xs hidden-sm">
                            <input type="text" placeholder="Search" id="search">
                        </div> -->
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside"
                        <ul class="list-inline header-top pull-left">
                            <a href="#" style="color: black">Home</a>
                            <a href="#" style="color: black">Services</a>
                            <a href="#" style="color: black">Blog</a>
                            <a href="#" style="color: black">Contacts</a>

                        </ul>
                        <ul class="list-inline header-top pull-right">
                            <!-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> -->

                            <li>
                                <a href="#" class="icon-info">
                                    <i class="fa fa-bell" aria-hidden="true"></i>
                                    <span class="label label-primary">3</span>
                                </a>
                            </li>


                        </ul>
                    </div>
            </div>
            </header>
        </div>
        <div class="user-dashboard">
            <div class="panel-heading">
                <div class="form-group">

                </div>
                <h4>
                    <b>Item Details</b>
                </h4>
                <label><input type="text" name="search_text" id="search_text" placeholder="Search by Item Details" class="form-control" /></label>
            </div>


            <div id="result">
                <?php foreach($item_list as $item){
                    $item_name=($item->item_name);
                    $item_id=($item->item_id);
                    $price="Rs.".($item->price);
                    $category=($item->category);
                    $description=($item->description);
                    $image=($item->image);
                    $link= base_url().'assets/'.$image.'.jpg';
                    $more_link=base_url().'index.php/link/getdata/'.$item_id;
                    //Call the admin controller calss to get the more information about the student
                    echo "<div class=\"member\" style='float:left;
    width:210px;
    height:500px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
    -moz-box-shadow: 1px 2px 2px #ccc;
    -webkit-box-shadow: 1px 2px 2px #ccc;
    box-shadow: 1px 2px 2px #ccc;'>
    
    <br><br>
    <img style=\"width: 200px;\" src=".$link. " alt=\"Click the link to see more info\"  />
    <div class=\"name\">
        <h4 style=\"font-size: 20px;text-align: center\" class=\"card-title\">
        $item_name
        </h4>
        <p style=\"font-size:15px;text-align: center\"  class=\"card-text\">$price</p>
        <p style=\"color: #003399; font-size: 15px;text-align: center\"  class=\"card-text\"><a href=".$more_link.">More</a></p><br />
     

    </div>
    


</div>";


                }?>
            </div>

        </div>
    </div>
</div>

</div>


</body>

</html>
