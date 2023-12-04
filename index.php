<?php
require_once 'Product.php';
require_once 'User.php';
require_once 'Order.php';

// Create products
$product1 = new Product(1, 'Laptop', 1000);
$product2 = new Product(2, 'Smartphone', 500);

// Create users
$user1 = new User(1, 'John Doe');
$user2 = new User(2, 'Jane Doe');

// Create orders
$order1 = new Order($user1);
$order1->addProduct($product1, 2);

$order2 = new Order($user2);
$order2->addProduct($product2, 1);

// Display order details
echo "Order 1 Details:\n";
echo $order1->getDetails();

echo "\nOrder 2 Details:\n";
echo $order2->getDetails();
?>
