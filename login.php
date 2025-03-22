<!-- login.php -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Giả sử kiểm tra đăng nhập thành công
    if ($email === 'admin@example.com' && $password === 'password') {
        $_SESSION['user'] = $email;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Email hoặc mật khẩu không đúng.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
        <h1>Đăng Nhập</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <label>Email:</label>
            <input type="email" name="email" required placeholder="Nhập email">

            <label>Mật khẩu:</label>
            <input type="password" name="password" required placeholder="Nhập mật khẩu">

            <button type="submit">Đăng Nhập</button>
        </form>

        <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a> | <a href="reset-password.php">Quên mật khẩu?</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>