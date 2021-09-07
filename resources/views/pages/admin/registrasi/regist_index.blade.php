@extends('layouts.admin')

@section('content')
   
   <!-- Page header -->
	<div class="page-header border-bottom-0">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4></i> <span class="font-weight-semibold">Halaman Registrasi</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
<div class="content">

    <!-- Basic card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title"></h5>
            <div class="header-elements">
                <div class="list-icons">
                    
                </div>
            </div>
        </div>

        <div class="ml-2">
            <form class="form-inline" method="GET" action="{{route('regist_index')}}">
                <input class="form-control mr-sm-2 form-control-sm" name="search" type="search" placeholder="Search By Name" aria-label="Search" value="">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
                <a href="{{route('regist_index')}}" class="btn btn-outline-secondary btn-sm my-2 my-sm-0 ml-1">Reset</a>
            </form>
                    <div class="mr-3" align="right">
                            <a href="{{route('regist_create')}}" class="btn btn-sm btn-outline-secondary btn-sm my-2 my-sm-0 mr-1">Add Regist</a>
                            <a href="" class="btn btn-sm btn-outline-secondary btn-sm my-2 my-sm-0 mr-1">BIN Regist</a>
                    </div>
        </div>

        <div class="card-body p-0 table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Registrasi</th>
                        <th>Nama</th>
                        <th>Fitur</th>
                        <th>Koin</th>
                        <th>Bukti</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="POST" class="formDelete">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-link btn-sm">Edit</a> 
                                <button type="submit" class="btn btn-link text-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="9" style="align-items: center;">
                        </td>
                        <td colspan="2">
                            total :  data
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
    $('.formDelete').submit(function(e){
        c = confirm('delete data ?');
        if(!c){
            e.preventDefault();
        }
        return true;
    });
</script>
@endpush