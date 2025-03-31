<?php
    include '../jewelry-shop/public/assets/components/connect.php';

    $user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : null;

?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ - Jewelry Shop</title>
        <link rel="stylesheet" href="../jewelry-shop//public/assets/css//styleshomepage.css">
        <link rel="stylesheet" href="../jewelry-shop//public/assets/css//stylessignup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
        <link rel="icon" href="../jewelry-shop/public/assets/images/logoicon.png" type="image/x-icon">
    </head>
<body>
    <?php include '../jewelry-shop/public/assets/components/user_header.php'; ?>
    <main>
        <div class = "banner">
            <div class = "slides">
                <img src="../jewelry-shop/public/assets/images/homepage1.jpg" alt="banner">
                <img src="../jewelry-shop/public/assets/images/homepage2.jpg" alt="banner">
                <img src="../jewelry-shop/public/assets/images/homepage3.jpg" alt="banner">
            </div>
            <a class = "prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class = "next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class = "content">
            <div class = "quote">
                <h1 style="font-family: Great Vibes, cursive;"> “Wearing jewelry is the way to express who you are... without saying a word."</h1>
                <p>Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.</p>
            </div>   
            <div class="gallery">
                <img src="../jewelry-shop/public/assets/images/gallery/gallery4.jpg" class="gallery4">
                <img src="../jewelry-shop/public/assets/images/gallery/gallery3.jpg" class="gallery3">
                <img src="../jewelry-shop/public/assets/images/gallery/gallery0.jpg" class="gallery0">
                <img src="../jewelry-shop/public/assets/images/gallery/gallery1.jpg" class="gallery1">
                <img src="../jewelry-shop/public/assets/images/gallery/gallery2.jpg" class="gallery2">
            </div>
            <div class="categories">
                <h2>Trang sức mới</h2>
                <h2>Bán chạy nhất</h2>
                <h2>Khuyến mãi</h2>
                <h2>About</h2>
            </div>
        </div>
        <div class="container">
    <h1>Pearl Silver Jewelry in Hanoi</h1>
    <div class="jewelry-categories">
        <div class="category">
        <img src="../jewelry-shop//public//assets//images//products//Bong_tai_bac_xo_lo//Product-3.jpg" alt="Necklaces">
        <p>NECKLACES</p>
        </div>
        <div class="category">
        <img src="pendant.jpg" alt="Pendants">
        <p>PENDANTS</p>
        </div>
        <div class="category">
        <img src="earrings.jpg" alt="Earrings">
        <p>EARRINGS</p>
        </div>
        <div class="category">
        <img src="ring1.jpg" alt="Rings">
        <p>RINGS</p>
        </div>
        <div class="category">
        <img src="bracelet.jpg" alt="Bracelets">
        <p>BRACELETS</p>
        </div>
        <div class="category">
        <img src="gold-ring.jpg" alt="Gold Jewellery">
        <p>GOLD JEWELLERY</p>
        </div>
    </div>
    <div class="navigation-arrow"></div>
</div>

    </main>
    <script src = "../jewelry-shop//public/assets/js/slider.js"></script>
</body>
</html>
<style>
    body {
  background-color: white;
  font-family: Arial, sans-serif;
}

.container {
  width: 1200px;
  margin: 0 auto;
  text-align: center;
  position: relative;
}

h1 {
  font-size: 36px;
  font-weight: bold;
  color: black;
  font-family: Times New Roman, serif;
}

.jewelry-categories {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.category {
  text-align: center;
  margin: 0 10px;
}

.category img {
  width: 180px;
  height: 180px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 5px #ccc, 0 5px 10px -5px #ccc;
}

.category p {
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  margin-top: 5px;
  color: black;
}

.navigation-arrow {
  position: absolute;
  bottom: 10px;
  right: 10px;
  width: 20px;
  height: 20px;
  background-color: gray;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.navigation-arrow::before {
  content: "";
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid white;
}
</style>