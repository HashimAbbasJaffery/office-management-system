<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="apple-touch-icon" href="../front/app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="../front/app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="../front/app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/vendors/css/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/vendors/css/forms/icheck/custom.css">
        <!-- END: Vendor CSS-->
    
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/components.css">
        <!-- END: Theme CSS-->
    
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="../front/app-assets/css/pages/login-register.css">
        <!-- END: Page CSS-->
    
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    </head>
    <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
            @include('layouts.modren-theme-navigation')
            @include('layouts.side-navbar')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
    </body>
        <!-- BEGIN: Vendor JS-->
        <script src="../front//app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->
    
        <!-- BEGIN: Page Vendor JS-->
        <script src="../front/app-assets/vendors/js/charts/chart.min.js"></script>
        <script src="../front/app-assets/vendors/js/charts/raphael-min.js"></script>
        <script src=".../front/app-assets/vendors/js/charts/morris.min.js"></script>
        <script src=".../front/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
        <script src=".../front/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
        <script src="../front/app-assets/data/jvector/visitor-data.js"></script>
        <!-- END: Page Vendor JS-->
    
        <!-- BEGIN: Theme JS-->
        <script src="../front/app-assets/js/core/app-menu.js"></script>
        <script src="../front/app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->
    
        <!-- BEGIN: Page JS-->
        <script src="../front/app-assets/js/scripts/pages/dashboard-sales.js"></script>
        <!-- END: Page JS-->
</html>
