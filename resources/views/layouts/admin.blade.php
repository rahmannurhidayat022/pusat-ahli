<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>PUSAT AHLI ADMINISTRATION</title>

  @include('includes.admin.style')

  @include('includes.admin.script')

</head>

<body>
	@include('includes.admin.navbar')

	<!-- Page content -->
	<div class="page-content">

		@include('includes.admin.sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

			@yield('content')

			@include('includes.admin.footer')

		</div>
		<!-- End Main content -->

	</div>
	<!-- End Page content -->
</body>