<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEIKA Co Living</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">SEIKA</span> CoLiving</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ url('/') }}/" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/') }}/about" class="nav-item nav-link">About</a>
                        <a href="{{ url('/') }}/properties" class="nav-item nav-link">Property</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-white py-1"></div>

    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="{{ url('/') }}/">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="{{ url('/') }}/about">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="ri-building-line display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">{{ $about->experience }}</h4>
                        <h1 class="m-0">Years Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">{{ $about->minitext }}</h6>
                    <h1 class="mb-4 section-title">{{ $about->judul }}</h1>
                    <p>{{ $about->abt_desc }}</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
            <div class="container-fluid bg-dark py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 text-left mb-3 mb-lg-0">
                            <div class="d-inline-flex text-left">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h5 style="color: rgba(223,177,99,255);">Location</h5>
                                    <p class="m-0">BSD, Serpong, Tangerang Selatan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                            <div class="d-inline-flex text-left">
                                <h1 class="ri-instagram-line font-weight-normal text-primary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h5 style="color: rgba(223,177,99,255);">Instagram</h5>
                                    <a class="m-0" href="https://www.instagram.com/seika_coliving/">@seika_coliving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                            <div class="d-inline-flex text-left">
                                <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                                <div class="d-flex flex-column">
                                    <h5 style="color: rgba(223,177,99,255);">Call us</h5>
                                    <p class="m-0">081519310755</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row text-right text-md-start justify-content-between py-5 px-4 px-xl-6">
                            <div>
                                <a href="#!" class="text-white me-4"></a>
                                <a href="#!" class="text-white me-4"></a>
                                <a href="#!" class="text-white me-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/assets/lib/easing/easing.min.js"></script>
        <script src="{{ url('/') }}/assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ url('/') }}/assets/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="{{ url('/') }}/assets/lib/lightbox/js/lightbox.min.js"></script>

        {{-- <script src="{{ url('/') }}/assets/mail/jqBootstrapValidation.min.js"></script>
        <script src="{{ url('/') }}/assets/mail/contact.js"></script> --}}

        <script src="{{ url('/') }}/assets/js/main.js"></script>
</body>

</html>