<!-- register.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $error = "Mật khẩu không khớp.";
    } else {
        // Xử lý đăng ký (ví dụ: lưu vào CSDL)
        $success = true; // Giả định đăng ký thành công
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Logo Tùy Chỉnh</div>
        <nav>
            <a href="index.php">Trang Chủ</a>
            <a href="about.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ</a>
            <a href="login.php">Đăng Nhập</a>
        </nav>
    </header>

    <main>
        <h1>Đăng Ký</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (isset($success)): ?>
            <p class="success">Đăng ký thành công! <a href="login.php">Đăng nhập</a> ngay.</p>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <label>Họ và Tên:</label>
            <input type="text" name="name" required placeholder="Nhập họ và tên">

            <label>Email:</label>
            <input type="email" name="email" required placeholder="Nhập email">

            <label>Mật khẩu:</label>
            <input type="password" name="password" required placeholder="Nhập mật khẩu">

            <label>Xác nhận Mật khẩu:</label>
            <input type="password" name="confirm_password" required placeholder="Xác nhận mật khẩu">

            <button type="submit">Đăng Ký</button>
        </form>

        <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a> | <a href="reset-password.php">Quên mật khẩu?</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
