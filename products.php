<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTS</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include 'header_link.php' ?>
    <style><?php include 'css/products.css' ?></style>
    <style><?php include 'css/header.css' ?></style>

</head>
<header>
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
                    <i class="fa-solid fa-user fa-3x"></i>
                    </ul>
                </div>
                </nav>
        </div>
    </div>
    </div>
</header>
<body>
    <div id="mainContainer">

        <h1> clothing for men and women </h1>
        <div id="containerClothing">
            <!-- JS rendered code -->
        </div>

        <h1> accessories for men and women </h1>
        <div id="containerAccessories">
            <!-- JS rendered code -->
        </div>
    </div>
</body>
<script src="product.js"></script>
</html>