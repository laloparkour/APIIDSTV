<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.nav')

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                @include('layouts.sidebar')
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @include('layouts.bread')
                    @yield('contenido')
                    
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            
            <footer class="footer">
                @include('layouts.footer')
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('layouts.scripts')

</body>

</html>
