<?php

include 'config.php';

$sql_cart = "CREATE TABLE IF NOT EXISTS cart (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(100) NOT NULL,
    pid INT(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price INT(100) NOT NULL,
    quantity INT(100) NOT NULL,
    image VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_cart);

$sql_message = "CREATE TABLE IF NOT EXISTS message (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number VARCHAR(12) NOT NULL,
    message VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_message);

$sql_orders = "CREATE TABLE IF NOT EXISTS orders (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    number VARCHAR(12) NOT NULL,
    email VARCHAR(100) NOT NULL,
    method VARCHAR(50) NOT NULL,
    address VARCHAR(500) NOT NULL,
    total_products VARCHAR(1000) NOT NULL,
    total_price INT(100) NOT NULL,
    placed_on VARCHAR(50) NOT NULL,
    payment_status VARCHAR(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_orders);

$sql_products = "CREATE TABLE IF NOT EXISTS products (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    details VARCHAR(500) NOT NULL,
    price INT(100) NOT NULL,
    image VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_products);

$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    user_type VARCHAR(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_users);

$sql_wishlist = "CREATE TABLE IF NOT EXISTS wishlist (
    id INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(100) NOT NULL,
    pid INT(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price INT(100) NOT NULL,
    image VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
mysqli_query($conn, $sql_wishlist);

mysqli_close($conn);
?>
