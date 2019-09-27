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
	
	<!-- Lightview -->
	<link rel="stylesheet" href="assets/plugin/lightview/css/lightview/lightview.css">

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
		<div class="isotope-filter js__filter_isotope">
			<ul class="filter-controls">
				<li><a href="#" class="js__filter_control js__active" data-filter="*">All</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".massage">Massage</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".skin-care">Skin Care</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".make-hair">Make Hair</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".spa">Spa</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".nail">Nail</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".beauty">Beauty</a></li>
			</ul>

			<div class="row row-inline-block small-spacing js__isotope_items">
				@foreach ($photos as $photo)
				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item {{$photo['tag']}}">
					<a href="{{$photo['url']}}" class="item-gallery lightview" data-lightview-group="group">
						<img src="{{$photo['url']}}" alt="">
						<h2 class="title">{{$photo['title']}}</h2>
						<!-- /.title -->
					</a>
				</div>
				@endforeach
			</div>

			<!-- /.filter-controls -->
{{--			<div class="row row-inline-block small-spacing js__isotope_items">--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item beauty">--}}
{{--					<a href="assets/images/gallery/our-gallery-1.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-1.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item massage beauty spa" data-lightview-group="group">--}}
{{--					<a href="assets/images/gallery/our-gallery-2.jpg" class="item-gallery lightview">--}}
{{--						<img src="assets/images/gallery/our-gallery-2.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item nail">--}}
{{--					<a href="assets/images/gallery/our-gallery-3.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-3.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa">--}}
{{--					<a href="assets/images/gallery/our-gallery-4.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-4.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item make-hair">--}}
{{--					<a href="assets/images/gallery/our-gallery-5.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-5.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa massage">--}}
{{--					<a href="assets/images/gallery/our-gallery-6.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-6.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item nail beauty">--}}
{{--					<a href="assets/images/gallery/our-gallery-7.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-7.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item massage">--}}
{{--					<a href="assets/images/gallery/our-gallery-8.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-8.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty" data-lightview-group="group">--}}
{{--					<a href="assets/images/gallery/our-gallery-9.jpg" class="item-gallery lightview">--}}
{{--						<img src="assets/images/gallery/our-gallery-9.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item nail beauty">--}}
{{--					<a href="assets/images/gallery/our-gallery-10.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-10.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item massage">--}}
{{--					<a href="assets/images/gallery/our-gallery-11.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-11.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty" data-lightview-group="group">--}}
{{--					<a href="assets/images/gallery/our-gallery-12.jpg" class="item-gallery lightview">--}}
{{--						<img src="assets/images/gallery/our-gallery-12.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item nail beauty">--}}
{{--					<a href="assets/images/gallery/our-gallery-13.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-13.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item massage">--}}
{{--					<a href="assets/images/gallery/our-gallery-14.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-14.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--				<div class="col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item spa skin-care beauty">--}}
{{--					<a href="assets/images/gallery/our-gallery-15.jpg" class="item-gallery lightview" data-lightview-group="group">--}}
{{--						<img src="assets/images/gallery/our-gallery-15.jpg" alt="">--}}
{{--						<h2 class="title">Etiam Processus Dynamicus</h2>--}}
{{--						<!-- /.title -->--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<!-- /.col-md-4 col-sm-6 col-tb-6 col-xs-12 js__isotope_item -->--}}
{{--			</div>--}}
			<!-- /.row row-inline-block js__isotope_items -->
		</div>
		<!-- /.isotope-filter js__filter_isotope -->
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

	<!-- Isotope -->
	<script src="assets/scripts/isotope.pkgd.min.js"></script>
	<script src="assets/scripts/cells-by-row.min.js"></script>

	<!-- Lightview -->
	<script src="assets/plugin/lightview/js/lightview/lightview.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>