<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-COMMERCE WEBSITE</title>
    <style><?php include 'css/header.css' ?></style>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="icon" href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo" type="image/gif" sizes="16x16">
    <!-- EXTERNAL LINKS -->
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
</head>
<body>
  <div class="container-fluid main_menu">
    <div class="row">
        <div class="col-md-12 col-12 mx-auto">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">PC-STORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><i class="fas fa-search search fa-2x"></i>
                        <input type="text" id="input" name="searchBox" placeholder="Search for Products"></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8081/ip_mini/header.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8081/ip_mini/products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8081/ip_mini/index.php">CONTACT</a>
                    </li>
                    <a href="http://localhost:8081/ip_mini/cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                    <li class="nav-item"><i class="fa-solid fa-user fa-3x"></i></li>
                    </ul>
                </div>
                </nav>
        </div>
    </div>
    </div>

    <div class="container-fluid main_header">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
              <div class="row">
                <!-- left side div -->
                <div class="col-md-6 col-12 main_header_left">
                  <p>Welcome to PC-STORE</p>
                  <h1>Get the Latest <span class="text_clr">PRODUCTS</span></h1>
                  <a href="http://localhost:8081/ip_mini/products.php"><button>SHOP NOW</button></a>
                </div>
  
                <!-- right side div -->
                <div class="col-md-6 col-12 main_header_right">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="w-100 h-100" src="imags/img1.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="w-100 h-100" src="imags/img2.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="w-100 h-100" src="imags/img3.png" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="w-100 h-100" src="imags/img4.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
  
              </div>
            </div>
        </div>
      </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $(document).ready(function()
        {
        $('#containerSlider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            });
        });
    </script>
</html>