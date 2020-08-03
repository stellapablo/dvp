<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Iconos -->
	<link rel="shortcut icon" href="{{url('images/icons/favicon.ico')}}" />

	{{ HTML::style('admin/images/icons/apple-touch-icon-144-precomposed.png')}}
	{{ HTML::style('admin/images/icons/apple-touch-icon-114-precomposed.png')}}
	{{ HTML::style('admin/images/icons/apple-touch-icon-72-precomposed.png')}}
	{{ HTML::style('admin/images/icons/apple-touch-icon-57-precomposed.png')}}
	{{ HTML::style('admin/images/icons/favicon.png')}}

	<!-- DVP Admin CSS Core -->
	{{ HTML::style('admin/css/minified/aui-production.min.css')}}

	<!-- Theme UI -->
	{{ HTML::style('admin/themes/minified/fides/color-schemes/dark-blue.min.css')}}

	<!-- Admin Responsive -->
	{{ HTML::style('admin/themes/minified/fides/common.min.css')}}
	{{ HTML::style('admin/themes/minified/fides/responsive.min.css')}}

	<!--  Admin JS -->
	{{ HTML::script('admin/js/jquery-1.9.1.js')}}

	{{ HTML::script('admin/js/minified/aui-production.min.js')}}
	{{ HTML::script('admin/js/jquery-ui-1.10.2.custom.min.js')}}

	<!-- DataTables CSS -->
	{{ HTML::style('css/jquery.dataTables.css')}}

	<!-- DataTables -->
	{{ HTML::script('js/jquery.dataTables.js')}}
	
	{{HTML::script('js/tinymce/tinymce.min.js')}}
	
	<script>
		jQuery(window).load(
			function() {

				var wait_loading = window.setTimeout(function() {
					$('#loading').slideUp('fast');
					jQuery('body').css('overflow', 'auto');
				}, 1000
				);

			});
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="overflow: hidden;">

	<div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
		<img src="{{ url('images/loader-dark.gif')}}" alt="" />
	</div>

	<div id="page-wrapper" class="demo-example">
		@include('admin.header')
		@include('admin.sidebar')				
		<div id="page-content-wrapper">	
		@include('admin.titulo')					
			<div id="page-content">
				<div class="row">					
					@yield('main')
					@yield('content')
				</div>
			</div><!-- #page-content -->
		</div><!-- #page-main -->
	</div><!-- #page-wrapper -->

</body>
</html>

