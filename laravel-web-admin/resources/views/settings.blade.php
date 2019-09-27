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
	
	<!-- X-Editable -->
	<link rel="stylesheet" href="assets/plugin/x-editable/bootstrap3-editable/css/bootstrap-editable.css">

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
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">站点信息配置</h4>
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
					<div class="switch primary margin-bottom-20"><input type="checkbox" id="switch-inline" checked><label for="switch-inline"><strong>Inline Editor</strong></label></div>
					<table class="table table-bordered table-striped">
						<tbody>
							<tr>
								<td style="width: 35%">站点名称</td>
								<td><a href="#" id="site_name" data-type="text" data-pk="1" data-title="Enter site_name">{{$site_name}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">站点域名</td>
								<td><a href="#" id="site_url" data-type="text" data-pk="1" data-title="Enter site_url">{{$site_url}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">公司名称</td>
								<td><a href="#" id="company_name" data-type="text" data-pk="1" data-title="Enter company_name">{{$company_name}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">公司地址</td>
								<td><a href="#" id="company_addr" data-type="text" data-pk="1" data-title="Enter company_addr">{{$company_addr}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">联系电话</td>
								<td><a href="#" id="mobile" data-type="text" data-pk="1" data-title="Enter mobile">{{$mobile}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">传真</td>
								<td><a href="#" id="fax" data-type="text" data-pk="1" data-title="Enter fax">{{$fax}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">微信</td>
								<td><a href="#" id="wx" data-type="text" data-pk="1" data-title="Enter wx">{{$wx}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">QQ</td>
								<td><a href="#" id="qq" data-type="text" data-pk="1" data-title="Enter qq">{{$qq}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">邮编</td>
								<td><a href="#" id="zip_code" data-type="text" data-pk="1" data-title="Enter zip_code">{{$zip_code}}</a></td>
							</tr>
							<tr>
								<td style="width: 35%">版权归属</td>
								<td><a href="#" id="copyright" data-type="text" data-pk="1" data-title="Enter copyright">{{$copyright}}</a></td>
							</tr>

						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
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

	<!-- Moment -->
	<script src="assets/plugin/moment/moment.js"></script>

	<!-- X-Editable -->
	<script src="assets/plugin/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<script src="assets/scripts/x-editable.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>