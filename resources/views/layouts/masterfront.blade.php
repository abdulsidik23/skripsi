<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>NRS - @yield('title')</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">



        <link rel="icon" type="image/png" href="<?=url('assets/img/favicons/favicon-16x16.png')?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?=url('assets/img/favicons/favicon-32x32.png')?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=url('assets/img/favicons/favicon-96x96.png')?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?=url('assets/img/favicons/favicon-160x160.png')?>" sizes="160x160">
        <link rel="icon" type="image/png" href="<?=url('assets/img/favicons/favicon-192x192.png')?>" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?=url('assets/img/favicons/apple-touch-icon-57x57.png')?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?=url('assets/img/favicons/apple-touch-icon-60x60.png')?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=url('assets/img/favicons/apple-touch-icon-72x72.png')?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=url('assets/img/favicons/apple-touch-icon-76x76.png')?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=url('assets/img/favicons/apple-touch-icon-114x114.png')?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=url('assets/img/favicons/apple-touch-icon-120x120.png')?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=url('assets/img/favicons/apple-touch-icon-144x144.png')?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=url('assets/img/favicons/apple-touch-icon-152x152.png')?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=url('assets/img/favicons/apple-touch-icon-180x180.png')?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?=url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" id="css-main" href="<?=url('assets/css/oneui.css')?>">
         <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?=url('assets/js/plugins/slick/slick.min.css')?>">
        <link rel="stylesheet" href="<?=url('assets/js/plugins/slick/slick-theme.min.css')?>">

<link rel="stylesheet" 
         href="<?=url('plugin/jquery-te/jquery-te-1.4.0.css')?>">
         
          <script src="<?=url('js/jquery.min.js')?>"></script>
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
            'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
        -->
        <div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">
        @include('layouts.header')

            

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
            @include('layouts.footer')
            
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?=url('assets/js/core/jquery.min.js')?>"></script>
        <script src="<?=url('assets/js/core/bootstrap.min.js')?>"></script>
        <script src="<?=url('assets/js/core/jquery.slimscroll.min.js')?>"></script>
        <script src="<?=url('assets/js/core/jquery.scrollLock.min.js')?>"></script>
        <script src="<?=url('assets/js/core/jquery.appear.min.js')?>"></script>
        <script src="<?=url('assets/js/core/jquery.countTo.min.js')?>"></script>
        <script src="<?=url('assets/js/core/jquery.placeholder.min.js')?>"></script>
        <script src="<?=url('assets/js/core/js.cookie.min.js')?>"></script>
        <script src="<?=url('assets/js/app.js')?>"></script>

        <script src="<?=url('plugin/jquery-te/jquery-te-1.4.0.min.js')?>"></script>

        <!-- Page Plugins -->
        <script src="<?=url('assets/js/plugins/slick/slick.min.js')?>"></script>

 <link rel="stylesheet" href="<?=url('plugin/rs/responsiveslides.css')?>">
 <script src="<?=url('plugin/rs/responsiveslides.min.js')?>"></script>
        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Appear + CountTo plugins)
                App.initHelpers(['appear', 'appear-countTo']);
            });
        </script>
    </body>
</html>