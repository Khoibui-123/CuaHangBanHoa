<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>đơn hàng</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>đơn hàng của bạn</h3>
    <p> <a href="home.php">trang chủ</a> / đơn hàng </p>
</section>

<section class="placed-orders">

    <h1 class="title">đơn hàng đã đặt</h1>

    <div class="box-container">

    <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_orders) > 0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
    ?>
    <div class="box">
        <p> đặt hàng vào : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
        <p> tên : <span><?php echo $fetch_orders['name']; ?></span> </p>
        <p> số điện thoại : <span><?php echo $fetch_orders['number']; ?></span> </p>
        <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
        <p> địa chỉ : <span><?php echo $fetch_orders['address']; ?></span> </p>
        <p> phương thức thanh toán : <span><?php echo $fetch_orders['method']; ?></span> </p>
        <p> đơn hàng của bạn : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
        <p> tổng giá : <span><?php echo number_format($fetch_orders['total_price'], 0, '', '.'); ?>đ/-</span> </p>
        <p> trạng thái thanh toán : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){echo 'tomato'; }else{echo 'green';} ?>"><?php echo $fetch_orders['payment_status']; ?></span> </p>
    </div>
    <?php
        }
    }else{
        echo '<p class="empty">chưa có đơn hàng nào được đặt!</p>';
    }
    ?>
    </div>

</section>







<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>