<x-login.layout>

<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
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
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">
                                        <img src="/front/app-assets/images/logo/logo-dark.png" alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="text-center">
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="la la-github font-medium-4"></span></a>
                                    </div>
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using
                                            Email</span></p>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input 
                                                    type="text" 
                                                    class="form-control"
                                                    id="name" 
                                                    placeholder="User Name"
                                                    name="name"
                                                >
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input 
                                                    type="email" 
                                                    class="form-control" 
                                                    id="email" 
                                                    placeholder="Your Email Address" 
                                                    required
                                                    name="email"
                                                >
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
        
                                                <div class="form-control-position">
                                                    <i class="la la-envelope"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input 
                                                    type="password" 
                                                    class="form-control" 
                                                    id="password"
                                                    placeholder="Enter Password" 
                                                    required
                                                    name="password"
                                                >
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input 
                                                    type="password" 
                                                    class="form-control" 
                                                    id="password_confirmation"
                                                    placeholder="Confirm Password" 
                                                    required
                                                    name="password_confirmation"
                                                >
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Register</button>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <a href="login-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
                                            Login</a>
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
