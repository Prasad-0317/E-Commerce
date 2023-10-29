<!doctype html>
<html lang="en">

<head>
    <meta cha&#x20B9;et="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD TO CART</title>
    <link rel="icon" href="https://yt3.ggpht.com/a/AGF-l78km1YyNXmF0r3-0CycCA0HLA_i6zYn_8NZEg=s900-c-k-c0xffffffff-no-rj-mo" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style><?php include 'css/style.css' ?></style>
    <style><?php include 'css/header.css' ?></style>
    <style><?php include 'css/cart.css' ?></style>
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
                    <i class="fa-solid fa-user fa-3x"></i>
                    </ul>
                </div>
                </nav>
        </div>
    </div>
    </div>
</body>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-11 mx-auto shadow">
                <div class="row mt-5 gx-3">
                    <!-- left side div -->
                    <div class="col-md-12 col-lg-8 col-11  main_cart mb-lg-0 mb-5">
                        <div class="card p-4" style="margin: -20px">
                            <h2 class="py-4 font-weight-bold" style="margin: 0px 40px;">Cart (2 items)</h2>
                            <div class="row">
                                <!-- cart iamages div -->
                                <div
                                    class="col-md-3 col-11 mx-auto bg-light d-flex justify-content-center align-content-center shadow product_img">
                                    <img id="item1" src="imags/item1.png" class="img-fluid" alt="cart img">
                                </div>

                                <!-- cart product details -->
                                <div class="col-md-8 col-11 mx-auto px-4 mt-2">
                                    <div class="row">
                                        <!-- product name -->
                                        <div class="col-6 card-title">
                                            <h3 class="mb-4 pro_name">Grey Shirt</h3>
                                            <p class="mb-2">SHIRT : FORMAL </p>
                                            <p class="mb-2">COLOR : GREY</p>
                                            <p class="mb-3">SIZE : M</p>
                                        </div>
                                        <!-- quantity inc dec -->
                                        <div class="col-6">
                                            <ul class="pagination justify-content-end set_qunatity">
                                                <li class="page-item"><button class="page-link"
                                                        onclick="dec('textbox','itemval')"><i
                                                            class="fa-solid fa-minus"></i></button></li>
                                                <li class="page-item"><input type="text" name="" id="textbox"
                                                        class="page-link" value="0" autocomplete="off"></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="inc('textbox','itemval')"><i
                                                            class="fa-solid fa-plus"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- remover price -->
                                    <div class="row">
                                        <div class="col-8 d-flex justify-content-between remove_wish px-3">
                                            <p><i class="fa-solid fa-trash-can"></i> REMOVE ITEM</p>
                                            <p><i class="fa-regular fa-heart"></i> MOVE TO WISHLIST</p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end price_money">
                                            <h3>&#x20B9;<span id="itemval"> 0.00</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- 2nd cart item -->
                            <h2 class="py-2 font-weight-bold"></h2>
                            <div class="row">
                                <!-- cart iamages div -->
                                <div
                                    class="col-md-3 col-11 mx-auto bg-light d-flex justify-content-center align-content-center shadow product_img">
                                    <img id="item1" src="imags/item3.png" class="img-fluid" alt="cart img">
                                </div>

                                <!-- cart product details -->
                                <div class="col-md-8 col-11 mx-auto px-4 mt-2">
                                    <div class="row">
                                        <!-- product name -->
                                        <div class="col-6 card-title">
                                            <h3 class="mb-4 pro_name">NOISE</h3>
                                            <p class="mb-2">Pink Color Fit Icon 2 Smartwatch </p>
                                            <p class="mb-2">COLOR : Pink</p>
                                            <p class="mb-3"></p>
                                        </div>
                                        <!-- quantity inc dec -->
                                        <div class="col-6">
                                            <ul class="pagination justify-content-end set_qunatity">
                                                <li class="page-item"><button class="page-link"
                                                        onclick="dec('textbox1','itemval1')"><i
                                                            class="fa-solid fa-minus"></i></button></li>
                                                <li class="page-item"><input type="text" name="" id="textbox1"
                                                        class="page-link" value="0" autocomplete="off"></li>
                                                <li class="page-item"><button class="page-link"
                                                        onclick="inc('textbox1','itemval1')"><i
                                                            class="fa-solid fa-plus"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- remover price -->
                                    <div class="row">
                                        <div class="col-8 d-flex justify-content-between remove_wish px-3">
                                            <p><i class="fa-solid fa-trash-can"></i> REMOVE ITEM</p>
                                            <p><i class="fa-regular fa-heart"></i> MOVE TO WISHLIST</p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end price_money">
                                            <h3>&#x20B9; <span id="itemval1">0.00</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right side div -->
                    </div>
                    <div class="col-md-10 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-3" style="font-size: 20px;">
                        <div class="right_side p-3 shadow bg-white" style="margin: 0px 33px; font-size: 25px;">
                            <h2 class="product_name mb-5">Total Amount of</h2>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Product amount</p>
                                <p>&#x20B9; <span id="pro_amt"> 0.00</span></p>
                            </div>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Shipping charge</p>
                                <p>&#x20B9; <span id="shipp_charge"> 30.00</span></p>
                            </div>
                            <hr>
                            <div class="tot_amt d-flex justify-content-between font-weight-bold">
                                <p>Total amount</p>
                                <p>&#x20B9; <span id="tot_amt"> 0.00</span></p>
                            </div>
                            <button class="btn btn-primary text-uppercase">check out</button>
                        </div>
                        <!-- discount code part  -->
                        <div class="disc_code mt-3 shadow">
                            <div class="card">
                                <div class="card-body" style="margin: 0px 33px;">
                                    <a class="d-flex justify-content-between" href="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">Add a discount code
                                        (optional)<span><i class="fas fa-chevron-down pt-1"></i></span></a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="mt-3">
                                            <input type="text" id="disc_code" class="form-control font-weight-bold"
                                                placeholder="Enter the discount code">
                                            <small id="error_trw" class="text-dark mt-3">code is pc</small>
                                        </div>
                                        <button class="btn btn-primary" onclick="discount_code()">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delivery date -->
                        <div class=" shadow p-3 ">
                            <div class="pt-4" style="margin: 0px 33px;">
                                <h5 class="mb-4">Expeccted delivery date </h5>
                                <p>1 October 2023 - 3 October 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>