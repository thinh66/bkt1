<!-- reset-password.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $success = true; // Giả định gửi thành công
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Mật Khẩu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">chưa có Logo</div>
        <nav>
            <a href="index.php">Trang Chủ</a>
            <a href="about.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ</a>
            <a href="login.php">Đăng Nhập</a>
        </nav>
    </header>

    <main>
        <h1>Reset Mật Khẩu</h1>

        <?php if (isset($success)): ?>
            <p class="success">Liên kết đặt lại mật khẩu đã được gửi tới email của bạn.</p>
        <?php endif; ?>

        <form method="POST" action="reset-password.php">
            <label>Email:</label>
            <input type="email" name="email" required placeholder="Nhập email">
            <button type="submit">Gửi Yêu Cầu</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
