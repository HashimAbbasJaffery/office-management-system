<x-login.layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click"
        data-menu="vertical-menu-modern" data-col="1-column">
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="row flexbox-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                                <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                    <div class="card-header border-0">
                                        <div class="card-title text-center">
                                            <img src="../front/app-assets/images/logo/logo-dark.png"
                                                alt="branding logo">
                                        </div>
                                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                            <span>Easily Using</span>
                                        </h6>
                                    </div>
                                    <div class="card-content">
                                        <div class="text-center">
                                            <a href="#"
                                                class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                                                    class="la la-facebook"></span></a>
                                            <a href="#"
                                                class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                                                    class="la la-twitter"></span></a>
                                            <a href="#"
                                                class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                                                    class="la la-linkedin font-medium-4"></span></a>
                                            <a href="#"
                                                class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                                                    class="la la-github font-medium-4"></span></a>
                                        </div>
                                        <p
                                            class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>OR Using Account
                                                Details</span>
                                        </p>
                                        <div class="card-body">
                                            
                                            @if($errors->any())
                                                <div class="alert alert-danger" style="position: fixed; top: 30px; transform: translate(-50%, -50%); left: 50%;">
                                                    <p style="margin-bottom: 0px">Invalid password or email</p>
                                                </div>
                                            @endif
                                            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                                @csrf
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="EMAIL" class="form-control" id="email"
                                                        name="email" placeholder="Email" required>

                                                    <div class="form-control-position">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Enter Password" required>
                                                    <div class="form-control-position">
                                                        <i class="la la-key"></i>
                                                    </div>
                                                </fieldset>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                                <div class="form-group row">
                                                    <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                        <fieldset>
                                                            <input type="checkbox" id="remember-me" name="remember"
                                                                class="chk-remember">
                                                            <label for="remember-me"> Remember Me</label>
                                                        </fieldset>
                                                    </div>
                                                    <div
                                                        class="col-sm-6 col-12 float-sm-left text-center text-sm-right">
                                                        
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route("password.request") }}" class="card-link">Forgot
                                                            Password?</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-outline-info btn-block"><i
                                                        class="ft-unlock"></i> Login</button>
                                            </form>
                                        </div>
                                        <p
                                            class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>New to Modern
                                                ?</span>
                                        </p>
                                        <div class="card-body">
                                            <a href="register-with-bg-image.html"
                                                class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
                                                Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
</x-login.layout>
