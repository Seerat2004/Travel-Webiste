<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel | SPA</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>
<body>

    <!-- Header Section Starts -->
    <section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

    <!-- Header Section Ends -->

    <!-- Home Section Starts -->
    <section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url('images/home-slide-1.jpg'); background-repeat: no-repeat;">
                <div class="content" >
                    <span style="color:white">explore, discover, travel</span>
                    <h3 style="color:white">travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url('images/home-slide-2.jpg'); background-repeat: no-repeat;">
                <div class="content">
                    <span style="color:white">explore, discover, travel</span>
                    <h3 style="color:white">discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url('images/home-slide-3.jpg'); background-repeat: no-repeat;">
                <div class="content">
                    <span style="color:white">explore, discover, travel</span>
                    <h3 style="color:white">experience unique cultures</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <!-- Swiper navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- Home Section Ends -->

<!-- Services Section Starts -->

    <section class="services">
        <h1 class="heading-title" style="color: black">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="Adventure Icon">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="Tour Guide Icon">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="Trekking Icon">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="Camp Fire Icon">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="Off Road Icon">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="Camping Icon">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- Services Section Ends -->
     <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="About Image">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p style="color : black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi porro illo, dolorem dolorum ipsum quas dolores laudantium sequi, cumque placeat accusamus tenetur maxime enim fuga laborum libero assumenda voluptas!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores fugiat assumenda architecto vitae, a aliquid asperiores hic tempore, illum magni dicta accusamus est in minus quo quod commodi atque. Accusamus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis dolore sit, inventore dolorem vitae voluptatibus temporibus officiis? Perspiciatis harum, nostrum natus architecto eum minima porro nihil, a ipsa eius totam!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod soluta natus, explicabo consequatur ex cupiditate officia accusamus laborum numquam eligendi eius magni, labore veritatis distinctio vel quisquam similique sint facilis.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
        </section>
    <!-- home about section -->



    <!--home package section starts-->
    <section class="home-packages">
    <h1 class="heading" style="
    background-image: url('images/light.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 6rem 2rem;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    display: flex;
    color:white;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    font-weight: bold;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
">
    Our Packages
</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package-1.jpg" alt="Package 1">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p style="color : black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package-2.jpg" alt="Package 2">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p style="color : black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image"> 
                    <img src="images/package-3.jpg" alt="Package 3">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>   
                    <p style="color : black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <!--home packages section ends-->

    <!--home offer section starts-->
        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>
                <p style="color : white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quos.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>
    <!--home offer section ends-->
    

    <!-- Footer Section Starts -->
    <section class="footer">
        <div class="box-container">
            
            <!-- Quick Links -->
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home" onclick="loadSection('home')"><i class="fas fa-angle-right"></i> Home</a>
                <a href="#about" onclick="loadSection('about')"><i class="fas fa-angle-right"></i> About</a>
                <a href="#package" onclick="loadSection('package')"><i class="fas fa-angle-right"></i> Package</a>
                <a href="#book" onclick="loadSection('book')"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <!-- Extra Links -->
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>    

            <!-- Contact Info -->
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> example@example.com</a>
                <a href="#"><i class="fas fa-map"></i> India - 123456</a>
            </div>

            <!-- Follow Us -->
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
        <div class="credit">&copy; 2024 Travel. All rights reserved.</div>
    </section>
    <!-- Footer Section Ends -->

    <!-- Swiper JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
