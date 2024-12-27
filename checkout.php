<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['order'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, 'số '. $_POST['flat'].', '. $_POST['street'].', '.$_POST['state'].','.$_POST['city']);

    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ',$cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = 'giỏ hàng của bạn trống!';
    }elseif(mysqli_num_rows($order_query) > 0){
        $message[] = 'đơn hàng đã được đặt!';
    }else{
        mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $message[] = 'đơn hàng đã được đặt thành công!';
    }
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanh toán</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>thanh toán đơn hàng</h3>
        <p> <a href="home.php">trang chủ</a> / thanh toán </p>
    </section>

    <section class="display-order">
        <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
    ?>
        <p> <?php echo $fetch_cart['name'] ?>
            <span>(<?php echo number_format($fetch_cart['price'], 0, '', '.').'/-'.' x '.$fetch_cart['quantity']  ?>)</span>
        </p>
        <?php
        }
        }else{
            echo '<p class="empty">giỏ hàng của bạn trống</p>';
        }
    ?>
        <div class="grand-total">tổng cộng : <span><?php echo number_format($grand_total, 0, '', '.'); ?>đ/-</span></div>
    </section>

    <section class="checkout">

        <form action="" method="POST">

            <h3>đặt đơn hàng của bạn</h3>

            <div class="flex">
                <div class="inputBox">
                    <span>tên của bạn :</span>
                    <input type="text" name="name" placeholder="nhập tên của bạn">
                </div>
                <div class="inputBox">
                    <span>số điện thoại của bạn :</span>
                    <input type="number" name="number" min="0" placeholder="nhập số điện thoại của bạn">
                </div>
                <div class="inputBox">
                    <span>email của bạn :</span>
                    <input type="email" name="email" placeholder="nhập email của bạn">
                </div>
                <div class="inputBox">
                    <span>phương thức thanh toán :</span>
                    <select name="method">
                        <option value="cash on delivery">thanh toán khi nhận hàng</option>
                        <option value="credit card">thẻ tín dụng</option>
                        <option value="paypal">paypal</option>
                        <option value="paytm">paytm</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>địa chỉ :</span>
                    <input type="text" name="flat" placeholder="ví dụ 280 An Dương Vương">
                </div>
                <div class="inputBox">
                    <span>phường :</span>
                    <input type="text" name="street" placeholder="ví dụ Phường 4 ">
                </div>
                <div class="inputBox">
                    <span>thành phố :</span>
                    <input type="text" name="city" placeholder="ví dụ Hồ Chí Minh">
                </div>
                <div class="inputBox">
                    <span>quận :</span>
                    <input type="text" name="state" placeholder="ví dụ Quận 5">
                </div>
                <!-- <div class="inputBox">
                    <span>quốc gia :</span>
                    <input type="text" name="country" placeholder="ví dụ Việt Nam">
                </div>
                <div class="inputBox">
                    <span>mã bưu điện :</span>
                    <input type="number" min="0" name="pin_code" placeholder="ví dụ 70000">
                </div> -->
            </div>

            <input type="submit" name="order" value="đặt hàng ngay" class="btn">

        </form>

    </section>






    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>