@extends('layouts.auth')

@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6 p-0 ">
                    <img src="./assets/img/login/login-screen.png"
                         style="height: auto;" class="img-fluid vh-100 d-none d-md-block" alt="Sample image">
                </div>
                <div class="col-md-6 forgot_pw_block">
                    <form method="POST" action="{{ route('forgot') }}">
                        @csrf
                        <div class="text-center">
                            <a href="#" class="mx-1">
                                <img src="./assets/img/login/logo.png" alt="">
                            </a>
                        </div>
                        <div class="my-4">
                            <p class="text-center   mx-3 mb-0 fs-2">Reset Your Password</p>
                            <p class="text-center text-muted">Request an email reset link .</p>
                        </div>
                        <!-- Email input -->
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <label class="form-label">Email id</label>
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control border-end-0" placeholder="Enter registered Email" aria-label="email" aria-describedby="addon-wrapping"
                                           name="email"/>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback d-block mb-2" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <span class="input-group-text bg-transparent border-start-0"
                                          id="addon-wrapping">
                                        <img src="./assets/img/login/ic_username.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <!-- Password input -->
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-4 mb-4">
                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button class="btn btn-primary btn-block mb-4" type="submit">Send Link
                                        <img src="./assets/img/login/ic_arrow.svg" class="float-end pt-1" alt="">
                                    </button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0 text-center">
                                        <i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;&nbsp;Back To
                                        <a href="{{route('showLoginForm')}}" style="color: #0076BF !important;" class="text-decoration-none"> Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-img">
            <img src="./assets/img/login/footer.png" class="img-fluid" alt="">
        </div>
    </section>
@endsection
