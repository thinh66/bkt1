<!-- products/create.php -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../../login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($name && $price && $description) {
        // Giả định thêm sản phẩm thành công
        $success = true;
    } else {
        $error = "Vui lòng điền đầy đủ thông tin.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <div class="logo">Logo Tùy Chỉnh</div>
        <nav>
            <a href="../../index.php">Trang Chủ</a>
            <a href="../../dashboard.php">Bảng Điều Khiển</a>
            <a href="index.php">Danh Sách Sản Phẩm</a>
            <a href="../../logout.php">Đăng Xuất</a>
        </nav>
    </header>

    <main>
        <h1>Thêm Sản Phẩm</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (isset($success)): ?>
            <p class="success">Sản phẩm đã được thêm thành công!</p>
        <?php endif; ?>

        <form method="POST" action="create.php">
            <label>Tên sản phẩm:</label>
            <input type="text" name="name" required placeholder="Nhập tên sản phẩm">

            <label>Giá:</label>
            <input type="text" name="price" required placeholder="Nhập giá">

            <label>Mô tả:</label>
            <textarea name="description" required placeholder="Nhập mô tả"></textarea>

            <button type="submit">Thêm Sản Phẩm</button>
        </form>

        <p><a href="index.php">Quay lại danh sách sản phẩm</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
