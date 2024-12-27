<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">
      <a href="admin_page.php" class="logo">QUẢN TRỊ ADMIN</i></a>

      <nav class="navbar">
         <a href="admin_page.php">TRANG CHỦ <i class="fas fa-home"></i></a>
         <a href="admin_products.php">SẢN PHẨM <i class="fas fa-box"></i></a>
         <a href="admin_orders.php">ĐƠN HÀNG <i class="fas fa-calculator"></i></a>
         <a href="admin_users.php">NGƯỜI DÙNG <i class="fas fa-users"></i></a>
         <a href="admin_contacts.php">TIN NHẮN <i class="fas fa-envelope"></i></a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <div class="account-info">
            <p>Tên người dùng : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         </div>
         <div class="account-actions">
            <a href="logout.php" class="delete-btn">đăng xuất <i class="fas fa-sign-out-alt"></i></a>
            <div class="login-register">
               <a href="login.php">đăng nhập <i class="fas fa-sign-in-alt"></i></a>
               <a href="register.php">đăng ký <i class="fas fa-user-plus"></i></a>
            </div>
         </div>
      </div>

   </div>

</header>