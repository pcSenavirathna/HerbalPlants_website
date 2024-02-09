<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="index.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/komarika.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Discover the essence of well-being with our Herbal Plants. We prioritize quality, sustainability, and the healing power of nature. Choose us for premium, ethically sourced herbal products that enrich your health journey.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Experience nature's bounty with our diverse range of Herbal Plants. From medicinal wonders to ornamental treasures, we offer quality plants and products, fostering a holistic connection to the healing wonders of botanicals.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/Herbal Plants.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/gotukola.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are passionate cultivators and advocates for the profound benefits of Herbal Plants. Committed to promoting well-being, sustainability, and a deeper connection to nature, we are your trusted source for herbal wisdom and wellness.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Exceptional service! Their Herbal Plants are of the highest quality. The team's knowledge and dedication to customer satisfaction make them my go-to for all things herbal. Highly recommended</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I'm delighted with the variety of Herbal Plants they offer. Each purchase is a joy, and their personalized recommendations showcase their commitment to customer satisfaction.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Reliable and professional. Their prompt delivery and well-cared-for plants exceeded my expectations. A trustworthy source for anyone seeking quality Herbal Plants.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Outstanding customer service and a diverse selection of Herbal Plants. I appreciate the personalized advice I received, ensuring my plants thrive. A top-notch experience!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Impressed by the freshness and vitality of the Herbal Plants I received. The team's attention to detail and passion for plants shine through. A fantastic resource for plant enthusiasts!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Exceptionally pleased with the quality and service. Their Herbal Plants have added vibrancy to my space, and their commitment to sustainable practices aligns with my values. A truly wonderful experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>