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
                                    </div>
                                    <div class="card-content">

                                        <div class="card-body">

                                            @if ($errors->any())
                                                <div class="alert alert-danger"
                                                    style="position: fixed; top: 30px; transform: translate(-50%, -50%); left: 50%;">
                                                    <p style="margin-bottom: 0px">Invalid password or email</p>
                                                </div>
                                            @endif
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('password.email') }}">
                                                @csrf
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="EMAIL" class="form-control" id="email"
                                                        name="email" placeholder="Email" required>
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                                    <div class="form-control-position">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </fieldset>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                                <button type="submit" class="btn btn-outline-info btn-block"><i
                                                        class="ft-unlock"></i> Send Email</button>
                                            </form>
                                        </div>
                                        <p
                                            class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>New to Office
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
