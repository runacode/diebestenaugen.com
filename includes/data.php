<?php


$data = json_decode(file_get_contents(dirname(__FILE__) . '/config/data.json'));
$product = $data->products[0];
include_once(dirname(__FILE__) . '/../locale/languages.php');


$product->name = T("<b>Feg Serum</b> - Eyelash Enhancer");
$product->one_free = T("1 Free");
$product->discount_expires = T("The discount expires in ");
$product->discount = T("Discount");
$product->excellent = T("Excellent");
$product->num_reviews = T("53 Reviews");
$product->buy_2_get_1 = T("Buy 2 and get 1 for free");
$product->satisfaction_guaranteed = T("Satisfaction<br>Guaranteed");
$product->add_to_cart = T("Add to Cart");
$product->rand_head = T("USA Only Free Shipping Till the Weekend");
$product->head = T("US 60% off + Free Shipping");

?>
