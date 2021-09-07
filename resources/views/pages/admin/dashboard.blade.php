@extends('layouts.admin')

@section('content')
   
   <!-- Page header -->
	<div class="page-header border-bottom-0">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4></i> <span class="font-weight-semibold">Dashboard</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content pt-0">
	<div class="row">
			<div class="col-lg-4">

				<!-- Members online -->
				<div class="card bg-teal-400">
					<div class="card-body">
						<div class="d-flex">
							<h3 class="font-weight-semibold mb-0"></h3>
							<!-- <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span> -->
	                	</div>
	                	
	                	<div>
							Total registration
							<!-- <div class="font-size-sm opacity-75">49 avg</div> -->
						</div>
					</div>

				</div>
				<!-- /members online -->

			</div>

			<div class="col-lg-4">

				<!-- Current server load -->
				<div class="card bg-pink-400">
					<div class="card-body">
						<div class="d-flex">
							<h3 class="font-weight-semibold mb-0"></h3>
							<!-- <span class="badge bg-pink-800 badge-pill align-self-center ml-auto">+53,6%</span> -->
							
	                	</div>
	                	
	                	<div>
							Total payment confirmation
							<!-- <div class="font-size-sm opacity-75">34.6% avg</div> -->
						</div>
					</div>

				</div>
				<!-- /current server load -->

			</div>

			<div class="col-lg-4">

				<!-- Today's revenue -->
				<div class="card bg-blue-400">
					<div class="card-body">
						<div class="d-flex">
							<h3 class="font-weight-semibold mb-0"></h3>
							<!-- <span class="badge bg-blue-800 badge-pill align-self-center ml-auto">+53,6%</span> -->
	                	</div>
	                	
	                	<div>
							Total Joined
							<!-- <div class="font-size-sm opacity-75">37,57 avg</div> -->
						</div>
					</div>

				</div>
				<!-- /today's revenue -->

			</div>
		</div>
	</div>

@endsection