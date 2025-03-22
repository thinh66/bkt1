<!-- contact.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Xử lý gửi thông tin (ví dụ: lưu vào CSDL hoặc gửi email)
    $success = true; // Giả định gửi thành công
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
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
        <h1>Liên Hệ</h1>

        <?php if (isset($success)): ?>
            <p class="success">Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.</p>
        <?php endif; ?>

        <form method="POST" action="contact.php">
            <label>Họ và Tên:</label>
            <input type="text" name="name" required placeholder="Nhập họ và tên">

            <label>Email:</label>
            <input type="email" name="email" required placeholder="Nhập email">

            <label>Chủ đề:</label>
            <input type="text" name="subject" required placeholder="Nhập chủ đề">

            <label>Nội dung:</label>
            <textarea name="message" required placeholder="Nhập nội dung"></textarea>

            <button type="submit">Gửi</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>