<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/monsteradmin/"
                        class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
                        Pro</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            @yield('admin_content')
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Revenue Statistics</h4>
                        <div class="flot-chart">
                            <div class="flot-chart-content " id="flot-line-chart"
                                style="padding: 0px; position: relative;">
                                <canvas class="flot-base w-100" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
       
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{ asset('adminhtml/assets/images/big/img1.jpg') }}" alt="Card">
                    <div class="card-body">
                        <ul class="list-inline d-flex align-items-center">
                            <li class="ps-0">20 May 2021</li>
                            <li class="ms-auto"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                        </ul>
                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{ asset('adminhtml/assets/images/big/img2.jpg') }}" alt="Card">
                    <div class="card-body">
                        <ul class="list-inline d-flex align-items-center">
                            <li class="ps-0">20 May 2021</li>
                            <li class="ms-auto"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                        </ul>
                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive" src="{{ asset('adminhtml/assets/images/big/img4.jpg') }}" alt="Card">
                    <div class="card-body">
                        <ul class="list-inline d-flex align-items-center">
                            <li class="ps-0">20 May 2021</li>
                            <li class="ms-auto"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                        </ul>
                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Recent blogss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->

</div>