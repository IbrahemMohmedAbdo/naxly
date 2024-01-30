<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <x-Sidebar/>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="width: 100%;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-topbar/>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="width: 100%;">
                    <!-- Page Heading -->
                    <x-dashboard-header title="Dashboard" :show-generate-report-button="true" />
                    <!-- Content Row -->
                    <x-content-row />

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('dashboard.layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <x-scroll-to-top />

    <x-logout-modal />

  <!-- script Js-->
@include('dashboard.layouts.script')

</body>

</html>
