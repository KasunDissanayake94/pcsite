

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
                <a href="home.html"><img src="../../assets/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="../../assets/images/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/manager/my_profile"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">My Profile</span></a></li>
                    <li class="active"><a href="<?php echo base_url();?>index.php/manager/add_user"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add User</span></a></li>
                    <li><a href="<?php echo base_url();?>index.php/manager/search_user"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Search User</span></a></li>
                    <li><a href="<?php echo base_url();?>index.php/manager/update_user"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Update User</span></a></li>
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
                        <div class="header-rightside">
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

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['type'] ?>
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <span><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></span>

                                                <div class="divider">
                                                </div>
                                                <a href="<?php echo base_url();?>index.php/manager/logout" class="view btn-sm active">log out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <h4 class="modal-title">Add User Form</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="<?php echo base_url();?>index.php/manager/add_user_details" method="post" id="myform">
                            <?php if (isset($message)) { ?>
                                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
                            <?php } ?>



                            <div class="form-group">
                                <label class="control-label col-sm-2">Username :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="username" type="email" name="username" placeholder="Valid Email here" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">First Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="fname" type="text" name="fname" placeholder="First Name here" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Last Name :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="lname" type="text" name="lname" placeholder="Last Name here" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Type :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type">
                                        <option value="manager">Manager</option>
                                        <option value="shop_director">Shop Director</option>
                                        <option value="editor">Editor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Password :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password here" />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="add-project" data-dismiss="modal" name="op" value="Add">Add</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</body>

</html>
<script>
    $(document).ready(function () {
        $('#myform').validate({ // initialize the plugin
            rules: {
                nic: {
                    required: true,
                    minlength: 5
                }
            },
            submitHandler: function (form) { // for demo
                alert('valid form submitted'); // for demo
                return false; // for demo
            }
        });

    });
</script>