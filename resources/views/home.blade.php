<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sispak Wahyu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/home/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Kawasaki Motor</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Lokasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
        
                      @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Motor Jaya Lestari</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Dealer Kawasaki</p>
                        {{-- <a class="btn btn-primary btn-xl" href="#about">Find Out More</a> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Profil</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Motor Jaya Lestari adalah salah satu dealer Kawasaki populer di Jayapura. Dealer ini terletak di Jl. Sam Ratulangi No. 47 A, Jayapura, Jayapura, 85228</p>
                        <p class="text-white-75 mb-4">Anda bisa mengunjunginya untuk test drive, mendapatkan penawaran terbaik, membeli mobil Kawasaki.</p>
                        {{-- <a class="btn btn-light btn-xl" href="#services">Get Started!</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Layanan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Service Berkala</h3>
                            {{-- <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Service Non Berkala</h3>
                            {{-- <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/1.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/1.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/2.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/2.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/3.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/3.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/4.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/4.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/5.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/5.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="/home/assets/img/bg.jpeg" title="Project Name">
                            <img class="img-fluid" src="/home/assets/img/bg.jpeg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                {{-- <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div> --}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Kontak</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">
                            Hubungi kami dengan kontak dibawah ini
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-phone fs-1 text-primary"></i></div>
                            <h3 class="h6 mb-2">+62827376658</h3>
                            {{-- <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h6 mb-2">wahyu@gmail.com</h3>
                            {{-- <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; {{date('Y')}} - Wahyu Illahi</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="/home/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
