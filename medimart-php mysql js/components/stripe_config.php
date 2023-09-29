<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
// $productName = "Codex Demo Product";  
// $productID = "DP12345";  
// $productPrice = 55; 
// $currency = "usd"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51N9UtpEDKaeY0qkhlhYvNKsFBVr670crKf5GVatzCZLieaIqfNjhOIgWcMjiBzp6iIOYZZteylK4lMuOe10RawOT00erJ1jurr'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51N9UtpEDKaeY0qkhr0WfOYWrMz6RIHHFiR0kK3Zfm5WpqoRhxAqV95F3QV5Tfsf6BdSL6dAgHgut3s6xr0NSTFur00mAQqUwWm'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/CSE-482/cloudkitchen/checkout.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/CSE-482/cloudkitchen/payment-cancel.php'); //Payment cancel URL 
$stripeSecretKey= 'sk_test_51N9UtpEDKaeY0qkhlhYvNKsFBVr670crKf5GVatzCZLieaIqfNjhOIgWcMjiBzp6iIOYZZteylK4lMuOe10RawOT00erJ1jurr'
    
// Database configuration    
// define('DB_HOST', 'MySQL_Database_Host');   
// define('DB_USERNAME', 'MySQL_Database_Username'); 
// define('DB_PASSWORD', 'MySQL_Database_Password');   
// define('DB_NAME', 'MySQL_Database_Name'); 
 
?>