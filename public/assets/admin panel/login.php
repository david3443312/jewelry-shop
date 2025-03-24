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
            <h1>Chào mừng trở lại:</h1>
            <h2>Vui lòng đăng nhập tài khoản của bạn ở đây:</h2>
        </div>
        
        <form class="signup-form">
            <div class="form-row">
                
                <div class="form-group">
                    <label for="username">Tên tài khoản:</label>
                    <input type="text" id="username" name="username" title="Tên đăng nhập phải từ 6-20 ký tự!" pattern="^[a-zA-Z0-9]{6,20}$" required>
                </div>
                
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" title="Mật khẩu phải từ 8-20 ký tự!" pattern=".{8,20}" required>
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="signup-btn1">Đăng nhập</button>
            </div>
        </form>
        <div class="signup-link">
            <h2>Bạn chưa có tài khoản:</h2>
            <a href="register.php">Đăng ký</a>
        </div> 
        
        <!-- <img src="images/signup/signup1.jpg" alt="Đăng ký tài khoản" class="signup-image"> -->
    </main>
    
</body>
</html>