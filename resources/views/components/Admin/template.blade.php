@extends('Dashboard.layouts.empty')
@section('body')
    <!--wrapper-->
    <div class="wrapper">
        @include('Dashboard.includes.side')
        @include('Dashboard.includes.header')
        <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                {{ $slot }}
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('Dashboard.includes.footer')
    </div>
    <!--end wrapper-->
@endsection
