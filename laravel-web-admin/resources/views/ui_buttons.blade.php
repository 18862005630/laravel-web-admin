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

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Buttons</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<a href="#" class="ico-item mdi mdi-logout js__logout"></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-2.jpg" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
					<span class="name">Update Status</span>
					<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-6.jpg" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-4.jpg" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">1 hour</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
					<span class="name">Account Contact Change</span>
					<span class="desc">A contact detail associated with your account has been changed.</span>
					<span class="time">2 hours</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-7.jpg" alt=""></span>
					<span class="name">Helen 987</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-8.jpg" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-1.jpg" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-3.jpg" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-4.jpg" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="assets/images/avatar-5.jpg" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Default Styles</h4>
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
					<!-- Standard button -->
					<p>Add class <code>.btn</code> to <code>a or button</code> elements<br>If you want to add wave effect likes this demo, just add these classes <code>.waves-effect ,.waves-light</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->		
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Bordered Styles</strong></h4>
					<p>Add class <code>.btn-bordered</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-bordered waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-bordered waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-bordered waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-bordered waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-bordered waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-bordered waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-bordered waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Rounded Styles</strong></h4>
					<p>Add class <code>.btn-rounded</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-rounded waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-rounded waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Combined Styles</strong></h4>
					<p>Combiend two classes <code>.btn-rounded</code> and <code>btn-bordered</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-rounded btn-bordered waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-rounded btn-bordered waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-rounded btn-bordered waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-rounded btn-bordered waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-rounded btn-bordered waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-rounded btn-bordered waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-rounded btn-bordered waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->	
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Large Sizes</h4>
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
					<p>Add class <code>.btn-lg</code> to makes it larger</p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-lg waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-lg waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-lg waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-lg waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-lg waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-lg waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Default Sizes</strong></h4>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Small Sizes</strong></h4>
					<p>Add class <code>.btn-sm</code> to makes it smaller</p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-sm waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-sm waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-sm waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-sm waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-sm waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-sm waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Extra Small Sizes</strong></h4>
					<p>Or <code>.btn-xs</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-xs waves-effect waves-light">Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-xs waves-effect waves-light">Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-xs waves-effect waves-light">Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-xs waves-effect waves-light">Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-xs waves-effect waves-light">Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet btn-xs waves-effect waves-light">Violet</button></li>
					</ul>
					<!-- /.list-inline -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Button With Left Icons</h4>
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
					<p>Add <code>&lt;i class="ico ico-left ..."&gt;&lt;/i&gt;</code> insides</p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light"><i class="ico ico-left fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="ico ico-left fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success waves-effect waves-light"><i class="ico ico-left fa fa-check"></i>Success</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info waves-effect waves-light"><i class="ico ico-left fa fa-info"></i>Info</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning waves-effect waves-light"><i class="ico ico-left fa fa-warning"></i>Warning</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger waves-effect waves-light"><i class="ico ico-left fa fa-flash"></i>Danger</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet waves-effect waves-light"><i class="ico ico-left fa fa-heart"></i>Violet</button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Other Styles</strong></h4>
					<p>Add classes <code>.btn-icon, .btn-icon-left</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-lg waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-lg waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-success btn-lg waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-primary waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-success waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-sm waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-success btn-sm waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-xs waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-left btn-success btn-xs waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Button With Right Icons</h4>
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
					<p>Add <code>&lt;i class="ico ico-right ..."&gt;&lt;/i&gt;</code> insides</p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn waves-effect waves-light">Default<i class="ico ico-right fa fa-flag"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary waves-effect waves-light">Primary<i class="ico ico-right fa fa-home"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success waves-effect waves-light">Success<i class="ico ico-right fa fa-check"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info waves-effect waves-light">Info<i class="ico ico-right fa fa-info"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning waves-effect waves-light">Warning<i class="ico ico-right fa fa-warning"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger waves-effect waves-light">Danger<i class="ico ico-right fa fa-flash"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-violet waves-effect waves-light">Violet<i class="ico ico-right fa fa-heart"></i></button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Other Styles</strong></h4>
					<p>Add classes <code>.btn-icon, .btn-icon-right</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-lg waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-lg waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-success btn-lg waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-primary waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-success waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-sm waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-success btn-sm waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-xs waves-effect waves-light"><i class="ico fa fa-flag"></i>Default</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-home"></i>Primary</button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-icon btn-icon-right btn-success btn-xs waves-effect waves-light"><i class="ico fa fa-check"></i>Success</button></li>
					</ul>
					<!-- /.list-inline -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Circle Buttons</h4>
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
					<p>Add class <code>.btn-circle</code> and <code>&lt;i class="ico ..."&gt;&lt;/i&gt;</code> insides</p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-camera"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-bed"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-cart-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-anchor"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-calendar"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-circle btn-lg waves-effect waves-light"><i class="ico fa fa-battery-1"></i></button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-circle waves-effect waves-light"><i class="ico fa fa-camera"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-circle waves-effect waves-light"><i class="ico fa fa-bed"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-circle waves-effect waves-light"><i class="ico fa fa-cart-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-circle waves-effect waves-light"><i class="ico fa fa-anchor"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-circle waves-effect waves-light"><i class="ico fa fa-calendar"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-battery-1"></i></button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-camera"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-bed"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-cart-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-anchor"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-calendar"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-battery-1"></i></button></li>
					</ul>
					<!-- /.list-inline -->
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-camera"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-primary btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-bed"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-success btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-cart-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-info btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-anchor"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-warning btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-calendar"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-danger btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-battery-1"></i></button></li>
					</ul>
					<!-- /.list-inline -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Social Buttons</h4>
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
					<p>Add classes <code>.btn-social + &lt;social class&gt;</code> and <code>&lt;i class="ico ..."&gt;&lt;/i&gt;</code> insides</p>
					<p>Social Class: <code>.btn-facebook,.btn-twitter,.btn-google-plus,.btn-linkedin,.btn-instagram,.btn-pinterest,.btn-dribbble,.btn-youtube</code></p>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-facebook"><i class="ico fa fa-facebook"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-twitter"><i class="ico fa fa-twitter"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-google-plus"><i class="ico fa fa-google-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-linkedin"><i class="ico fa fa-linkedin"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-instagram"><i class="ico fa fa-instagram"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-pinterest"><i class="ico fa fa-pinterest"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-dribbble"><i class="ico fa fa-dribbble"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-youtube"><i class="ico fa fa-youtube"></i></button></li>
					</ul>
					<!-- /.list-inline -->
					<div class="clearfix"></div>
					<h4 class="margin-top-10 margin-bottom-30"><strong>Circle Styles</strong></h4>
					<ul class="list-inline">
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-facebook btn-circle"><i class="ico fa fa-facebook"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-twitter btn-circle"><i class="ico fa fa-twitter"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-google-plus btn-circle"><i class="ico fa fa-google-plus"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-linkedin btn-circle"><i class="ico fa fa-linkedin"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-instagram btn-circle"><i class="ico fa fa-instagram"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-pinterest btn-circle"><i class="ico fa fa-pinterest"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-dribbble btn-circle"><i class="ico fa fa-dribbble"></i></button></li>
						<li class="margin-bottom-10"><button type="button" class="btn btn-social waves-effect waves-light btn-youtube btn-circle"><i class="ico fa fa-youtube"></i></button></li>
					</ul>
					<!-- /.list-inline -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
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