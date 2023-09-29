
<?php

require_once 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_GET['user_id'])){
   $user_id = $_GET['user_id'];
   setcookie('user_id', $user_id, time() + (86400 * 30), "/"); // set the cookie for 30 days
}



$delete_order = $conn->prepare("DELETE FROM `orders` WHERE user_id = ? order by id desc limit 1");
$delete_order->execute([$user_id]);

?>



<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Payment Cancel</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<!-- Stylesheet file -->
<link href="css/style.css" rel="stylesheet">


<style>
.container {
  height: 200px;
  position: relative;
  
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- <section class="hero"> -->

<div class="container">
    <div class="center">
    <h1 class="title">Your transaction was canceled!</h1>
        <h1 class="error"></h1>
        <a href="products.php" class="btn">Back to Product Page</a>
    </div>
    
    
</div>

<!-- </section> -->

<?php include 'components/footer.php'; ?>


</body>
</html>