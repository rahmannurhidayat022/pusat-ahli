@extends('layouts.login')

@section('content')

<!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center pt-0">

                <!-- Login card -->
                <form class="login-form" method="POST" action="{{ route('login') }}">
                     @csrf

                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-people icon-2x  border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">PUSAT AHLI SYSTEM</h5>
                            <span class="d-block text-muted">Login</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                           <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="username" required autocomplete="email" autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    Remember
                                </label>
                            </div>

                                @if(Route::has('password.request'))
                                    <a class="ml-auto" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <span class="form-text text-center text-muted">V 0.1.1</a></span>
                    </div>
                </form>
                <!-- /login card -->

            </div>
            <!-- /content area -->
            
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2021. <a href="#">PUSAT AHLI SYSTEM</a> by <span color="red"> Tech Team</span>
                    </span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="{{ url('/') }}" target="_blank" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-sphere mr-2"></i> View Site</span></a></li>
                    </ul>

                </div>
            </div>
            <!-- /footer -->
            

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

@endsection