<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel | SPA</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/book.css">

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

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
        <h1>
            BOOK NOW
        </h1>
    </div>
    <section class="booking">
    <h1 class="heading-title" style="text-align: center">BOOK YOUR TRIP!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name</span>
                    <input type="text" placeholder="first name" name="name">        
                </div>
                <div class="inputBox">
                    <span>email</span>
                    <input type="email" placeholder="email" name="email">        
                </div>
                <div class="inputBox">
                    <span>phone</span>
                    <input type="number" placeholder="phone" name="phone">        
                </div>
                <div class="inputBox">
                    <span>address</span>
                    <input type="text" placeholder="address" name="address">        
                </div>
                <div class="inputBox">
                    <span>where to</span>
                    <input type="text" placeholder="location" name="location">        
                </div>
                <div class="inputBox">
                    <span>how many</span>
                    <input type="number" placeholder="guests" name="guests">        
                </div>
                <div class="inputBox">
                    <span>arrivals</span>
                    <input type="date" name="arrivals">        
                </div>
                <div class="inputBox">
                    <span>leaving</span>
                    <input type="date" name="leaving">        
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
</body>
</html>