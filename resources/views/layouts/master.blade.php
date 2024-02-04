<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('klink/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('klink/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('klink/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('klinik/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('klinik/css/style.css') }}" rel="stylesheet">

    @stack('style')

</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><img src="{{asset('klinik/img/logo-1.jpg')}}" width="160"/></i></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/pasien" class="nav-item nav-link">Data Pasien</a>
                <a href="/skd" class="nav-item nav-link">Data SKD</a>
                <a href="/ds" class="nav-item nav-link">Sign SKD</a>
                <a href="/ds" class="nav-item nav-link">Logout</a>
            </div>
            <span class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <footer>
        <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style=" bottom:0">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Validasi.Skd.test</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">Muhammad Fauzan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('klinik/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('klinik/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('klinik/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
