<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product - Mkulima Janja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <!-- navbar ya juu kabisa  -->
            <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-6 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, Dar-es-Salaam, TZ</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>mkulimajanja@gmail.com</small>
                </div>
                <div class="col-lg-6 px-5 text-end">
                    <small>Tutembelee:</small>
                    <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
    
            <!-- Navbar yenye links hizo -->
            <nav class="navbar shadow-sm navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                    <h1 class="fw-bold text-primary m-0"><span class="text-secondary">M</span>kulima<span class="text-secondary">J</span>anja</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="elimu.html" class="nav-item nav-link">Elimu</a>
                        <a href="mbolea.html" class="nav-item nav-link">Mbolea</a>
                        <a href="madawa.html" class="nav-item nav-link">Madawa</a>
                        <a href="mazao.html" class="nav-item nav-link">Mazao</a>
                        <a href="login.html" class="nav-item nav-link text-danger">Login</a>
                    </div>
                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                            <small class="fa fa-search text-body"></small>
                        </a>
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                            <small class="fa fa-user text-body"></small>
                        </a>
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                            <small class="fa fa-shopping-bag text-body"></small>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <section class="mt-5" >
            <div class="container py-5 h-100 wow fadeInUp">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-11">
                  <div class="card border-0 shadow-sm" >
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 ">
                        <img src="img/product-1.jpg" 
                            alt="login form" class="img-fluid h-100" />
                      </div>
                      <div class="col-md-6 col-lg-7 px-4">
                        <h4 class="text-primary mt-4">Nyanya Nyekundu</h4>
                        <h5 class="text-danger">Tsh 1,000 /= @kg</h5>
                        <p>
                            Hizi Nyanya zinabei nafuu, zinapatikana ferry mitaa ya Navy kama una shida nazo unaweza kuja kuziichukua
                            bei inaweza pungua ukija mwenyewe!
                        </p>
                        <ul class="list">
                            <li><a class="active" href="#"><span>Kitengo</span> : Mazao</a></li>
                            <li><a href="#"><span>Zilizopo</span> : 30 kg</a></li>
                            <li><a href="#"><span>Delivery</span> : Free</a></li>
                        </ul>
                        <div class="row mt-3 d-flex align-items-center justify-content-center">
                            <div class="col-md-8 mt-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <input type="text" name="qty" id="sst" maxlength="10" value="1" title="Quantity:" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="btn btn-sm btn-outline-primary increase items-count" type="button">+</button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;" class="btn btn-sm btn-outline-primary reduced items-count" type="button">-</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-4">
                                <a class="btn-primary btn w-100" href="cart.html">Add to Cart</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    <!-- Product End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4"><span class="text-secondary">M</span>kulima<span class="text-secondary">J</span>anja</h1>
                    <p>Jipatie chochote kutoka shambani popote ulipo Tanzania!</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Mawasiliano</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Dar-es-Salaam, TZ</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+255 743 196 599</p>
                    <p><i class="fa fa-envelope me-3"></i>mkulimajanja@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Tembelea</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">Elimu</a>
                    <a class="btn btn-link" href="">Mazao</a>
                    <a class="btn btn-link" href="">Mbolea</a>
                    <a class="btn btn-link" href="">Madawa</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Matangazo</h4>
                    <p>Kuwa wa kwanza kujua bidhaa mpya sokoni</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Email yako..">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Tuma</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Mkulima Janja</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="http://alphajozee.me/alpha">Alpha Jozee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>