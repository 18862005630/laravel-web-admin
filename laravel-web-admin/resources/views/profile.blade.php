<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$theme}}-{{$title}}</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/styles/style.min.css">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

    <!-- Dark Themes -->
    <link rel="stylesheet" href="assets/styles/style-black.min.css">

    <!-- 数据渲染 -->
    <script type="text/javascript" src="assets/jquery-1.11.3.min.js"></script>
    <script src="assets/api/common.js"></script>
    <script src="assets/api/index.js" async></script>
</head>

<body>
@extends('common.header')
<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-md-3 col-xs-12">
                <div class="box-content bordered primary margin-bottom-20">
                    <div class="profile-avatar">
                        <img src="assets/images/profile.jpg" alt="">
                        <a href="#" class="btn btn-block btn-friend"><i class="fa fa-check-circle"></i> Friends</a>
                        <a href="#" class="btn btn-block btn-inbox"><i class="fa fa-envelope"></i> Send Messages</a>
                        <h3><strong>Betty Simmons</strong></h3>
                        <h4>Owner at Our Company, Inc.</h4>
                        <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <!-- .profile-avatar -->
                    <table class="table table-hover no-margin">
                        <tbody>
                        <tr>
                            <td>Status</td>
                            <td><span class="notice notice-danger">Active</span></td>
                        </tr>
                        <tr>
                            <td>User Rating</td>
                            <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></td>
                        </tr>
                        <tr>
                            <td>Member Since</td>
                            <td>Jan 07, 2014</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-content bordered -->

                <div class="box-content">
                    <h4 class="box-title"><i class="ico fa fa-users"></i>Friends</h4>
                    <ul class="profile-friends-list list-inline">
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-3.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-4.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-5.jpg" alt=""></a></li>
                    </ul>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-md-3 col-xs-12 -->
            <div class="col-md-9 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-user ico"></i>About</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>First Name:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Betty</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Last Name:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Simmons</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>User Name:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Betty</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Email:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">youremail@gmail.com</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>City:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Los Angeles</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Country:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">United States</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Birthday:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Jan 22, 1984</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Interests:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">Basketball, Web, Design, etc.</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Website:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7"><a href="#">yourwebsite.com</a></div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-5"><label>Phone:</label></div>
                                            <!-- /.col-xs-5 -->
                                            <div class="col-xs-7">+1-234-5678</div>
                                            <!-- /.col-xs-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-12 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-file-text ico"></i> Experience</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="dot-list">
                                    <li><a href="#">Owner</a> at <a href="#">NinjaTeam</a>.<span class="date">March 2013 ~ Now</span></li>
                                    <li><a href="#">CEO</a> at <a href="#">CEO Company</a>.<span class="date"> March 2011 ~ February 2013</span></li>
                                    <li><a href="#">Web Designer</a> at <a href="#">Web Design Company Ltd.</a>.<span class="date"> March 2010 ~ February 2011</span></li>
                                    <li><a href="#">Sales</a> at <a href="#">Sales Company Ltd.</a>.<span class="date"> March 2009 ~ February 2010</span></li>
                                </ul>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-trophy ico"></i> Education</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="dot-list">
                                    <li><a href="#">Students</a> at <a href="#">CEO Education</a>.<span class="date">March 2013 ~ Now</span></li>
                                    <li><a href="#">Students</a> at <a href="#">Web Design Education</a>.<span class="date">March 2011 ~ February 2013</span></li>
                                    <li><a href="#">Students</a> at <a href="#">Sales School</a>.<span class="date"> March 2010 ~ February 2011</span></li>
                                    <li><a href="#">Students</a> at <a href="#">High School</a>.<span class="date"> March 2009 ~ February 2010</span></li>
                                </ul>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-globe ico"></i> Activity</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="notice-list">
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
                                            <span class="name">Betty Simmons</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-success"><i class="glyphicon glyphicon-user"></i></span>
                                            <span class="name">New Signup</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">5 hours ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-warning"><img src="assets/images/avatar-2.jpg" alt=""></span>
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 year ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-warning"><i class="fa fa-flag"></i></span>
                                            <span class="name">New Message received</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-pink"><i class="fa fa-gear"></i></span>
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 year ago</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.notice-list -->
                                <div class="text-center margin-top-20"><a href="#" class="btn btn-default">See All Activities <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 col-xs-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-flask ico"></i> Skill</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <p>Photoshop</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <p>Illustrator</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <p>PHP</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                                <p>Javascript</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>Communication</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                                <p>Writing</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-md-9 col-xs-12 -->
        </div>
        <!-- /.row small-spacing -->
        @extends('common.footer')
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/script/html5shiv.min.js"></script>
<script src="assets/script/respond.min.js"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>

<script src="assets/scripts/main.min.js"></script>
</body>
</html>