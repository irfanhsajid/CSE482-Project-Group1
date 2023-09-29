<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.avif" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are fast, reliable and assure quality</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, sed! Saepe earum et explicabo maxime repellat nam culpa nobis illo facere, soluta quae cupiditate dolor officia cumque quam nostrum. Enim.</p>
         <a href="products.html" class="btn">our products</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Our Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/used-products.jpg" alt="">
         <h3>choose categories</h3>
         <p>Pick from used and brand new</p>
      </div>

      <div class="box">
         <img src="images/new-products.jpg" alt="">
         <h3>fast delivery</h3>
         <p>We serve anywhere in Bangladesh</p>
      </div>

      <div class="box">
         <img src="images/gadgets.jpg" alt="">
         <h3>most reliable</h3>
         <p>Always sell good quality products</p>
      </div>

   </div>

</section>

<!-- steps section ends -->



<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>