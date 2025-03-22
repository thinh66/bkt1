<!-- index.php -->
<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">Logo Tùy Chỉnh</div>
        <nav>
            <a href="index.php">Trang Chủ</a>
            <a href="about.php">Giới Thiệu</a>
            <a href="contact.php">Liên Hệ</a>
            <?php if ($isLoggedIn): ?>
                <a href="logout.php">Đăng Xuất</a>
            <?php else: ?>
                <a href="login.php">Đăng Nhập</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <h1>Chào mừng đến với Website!</h1>
        <p>Hệ thống quản lý sản phẩm hiệu quả và tiện lợi.</p>
        <?php if (!$isLoggedIn): ?>
            <button onclick="window.location.href='register.php'">Đăng Ký</button>
            <button onclick="window.location.href='login.php'">Đăng Nhập</button>
        <?php else: ?>
            <p>Bạn đã đăng nhập. Đi đến <a href="dashboard.php">Bảng điều khiển</a>.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>