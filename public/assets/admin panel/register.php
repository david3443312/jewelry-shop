<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập - Jewelry Shop</title>
        <link rel="stylesheet" href="../css//stylessignup.css">
        <link rel="stylesheet" href="../css//admin_style.css">
        <link rel="stylesheet" href="../css//styleshomepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
        <link rel="icon" href="../images/logoicon.png" type="image/x-icon">
    </head>
<body>
<main>
        <!-- <div class="breadcrumb" styles="margin-top: 2000px;">
            <a href="#"><i class="fas fa-home"></i> / Đăng ký tài khoản</a>
        </div> -->
        <div class="meetings">
            <h1>Chào mừng quý khách!</h1>
            <h2>Vui lòng đăng ký tài khoản mới tại đây:</h2>
        </div>
        <form class="signup-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="fullname" al>Họ và tên:</label>
                    <input type="text" id="fullname" name="fullname" title="Đừng quên nhập họ tên nha!" required>
                </div>
                <div class="form-group">
                    <label for="username">Tên đăng nhập:</label>
                    <input type="text" id="username" name="username" title="Tên đăng nhập phải từ 6-20 ký tự!" pattern="^[a-zA-Z0-9]{6,20}$" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" title="Mật khẩu phải từ 8-20 ký tự!" pattern=".{8,20}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="tel" id="phone" name="phone" pattern="^0[0-9]{9,10}$" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Nhập lại mật khẩu:</label>
                    <input type="password" id="confirm-password" name="confirm-password">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="signup-btn">Đăng ký</button>
            </div>
        </form>
        
        <!-- <img src="images/signup/signup1.jpg" alt="Đăng ký tài khoản" class="signup-image"> -->
    </main>
    
</body>
</html>