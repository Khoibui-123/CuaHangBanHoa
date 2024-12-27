<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         <i class="fas fa-info-circle"></i>
         <i class="fas fa-check-circle"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">KHÔI THÀNH</a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> TRANG CHỦ</a></li>
                <li><a href="#"><i class="fas fa-plus"></i> TRANG</a>
                    <ul>
                        <li><a href="about.php"><i class="fas fa-info-circle"></i>VỀ CHÚNG TÔI</a></li>
                        <li><a href="contact.php"><i class="fas fa-envelope-open-text"></i>LIÊN HỆ</a></li>
                    </ul>
                </li>
                <li><a href="shop.php"><i class="fas fa-shopping-bag"></i> SẢN PHẨM</a></li>
                <li><a href="orders.php"><i class="fas fa-list-alt"></i>ĐƠN HÀNG</a></li>
                <li><a href="#"><i class="fas fa-user"></i>TÀI KHOẢN</a>
                    <ul>
                        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>ĐĂNG NHẬP</a></li>
                        <li><a href="register.php"><i class="fas fa-user-plus"></i>ĐĂNG KÍ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
                $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        </div>

        <div class="account-box">
            <p>tên người dùng : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">đăng xuất</a>
        </div>

    </div>

</header>