<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
        <?php include 'link.php' ?>
        <style><?php include 'css/style.css' ?></style>
        <style><?php include 'css/products.css' ?></style>
        <style><?php include 'css/header.css' ?></style>
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
                            <a class="nav-link active" href="http://localhost:8081/ip_mini/index.php">CONTACT</a>
                        </li>
                        <a href="http://localhost:8081/ip_mini/cart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                        <li class="nav-item"><i class="fa-solid fa-user fa-3x"></i></li>
                        </ul>
                    </div>
                    </nav>
            </div>
        </div>
    </div>
</body>
<img src="imags/contact.png" alt="contact-us" srcset=""><br></html>
<body>
    <center>  
        <div> 
            <!-- Google Map Copied Code -->
            <iframe src= 
                    "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30162.285871974174!2d72.83728048402921!3d19.09511689999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9dd0c3b5637%3A0xa05bb46904bc2393!2sAmazon%20Shopping%20Centre!5e0!3m2!1sen!2sin!4v1696925681813!5m2!1sen!2sin"
                    width="400"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"> 
            </iframe> 
        </div> 
    </center> 
    <section id="form-details">
        <form action="index.php" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you....</h2>
            <input name="Name" type="text" placeholder="Your Name">
            <input name="Email" type="text" placeholder="Email">
            <input name="Subject" type="text" placeholder="Subject">
            <textarea name="Message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="btn btn-primary">SUBMIT</button>
        </form>
    </section>
</body>
</html>
<?php include 'connection.php' ?>
