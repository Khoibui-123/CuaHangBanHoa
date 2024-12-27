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
   <title>về chúng tôi</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>về chúng tôi</h3>
    <p> <a href="home.php">trang chủ</a> / về chúng tôi </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>Tại sao chọn chúng tôi?</h3>
            <p>Chúng tôi cam kết cung cấp sản phẩm chất lượng, dịch vụ tốt nhất và giá cả hợp lý. Hãy đến với chúng tôi để trải nghiệm sự khác biệt!</p>
            <a href="shop.php" class="btn">mua ngay</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>chúng tôi cung cấp gì?</h3>
            <p>Chúng tôi cung cấp các loại hoa tươi, hoa giả, và các sản phẩm liên quan đến hoa để đáp ứng nhu cầu của khách hàng.</p>
            <a href="contact.php" class="btn">liên hệ chúng tôi</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>chúng tôi là ai?</h3>
            <p>Chúng tôi là một đội ngũ chuyên nghiệp, cam kết mang đến cho bạn những trải nghiệm tuyệt vời nhất.</p>
            <a href="#reviews" class="btn">đánh giá của khách hàng</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">đánh giá của khách hàng</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Khôi</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10</p>
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
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10</p>
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
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10</p>
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
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10</p>
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
            <p>Dịch vụ đặt hoa online rất tuyệt vời! Hoa tươi, được gói cẩn thận và giao đúng hẹn. Mình đặc biệt ấn tượng với cách tư vấn chu đáo và nhiều lựa chọn phù hợp cho từng dịp. Nếu có thêm tính năng theo dõi trạng thái đơn hàng chi tiết hơn, trải nghiệm sẽ hoàn hảo. Đánh giá: 9.5/10</p>
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