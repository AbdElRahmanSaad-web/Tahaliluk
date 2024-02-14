<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('AdminAssets/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('AdminAssets/assets/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet" />
	<link href="{{asset('AdminAssets/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{asset('AdminAssets/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('AdminAssets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('AdminAssets/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('AdminAssets/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('AdminAssets/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('AdminAssets/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('AdminAssets/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('AdminAssets/assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('AdminAssets/assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('AdminAssets/assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('AdminAssets/assets/css/header-colors.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles')
	<title>{{ env('APP_NAME')}}</title>
</head>

{{-- <body onload="info_noti()"> --}}
<body>