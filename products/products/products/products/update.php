<!-- products/update.php -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../../login.php');
    exit();
}

// Giả lập dữ liệu sản phẩm hiện tại
$product = [
    'id' => $_GET['id'] ?? 1,
    'name' => 'Sản phẩm A',
    'price' => '100.000 VND',
    'description' => 'Mô tả sản phẩm A',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($name && $price && $description) {
        // Giả định cập nhật sản phẩm thành công
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
    <title>Cập Nhật Sản Phẩm</title>
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
        <h1>Cập Nhật Sản Phẩm</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (isset($success)): ?>
            <p class="success">Sản phẩm đã được cập nhật thành công!</p>
        <?php endif; ?>

        <form method="POST" action="update.php?id=<?php echo $product['id']; ?>">
            <label>Tên sản phẩm:</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>

            <label>Giá:</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" required>

            <label>Mô tả:</label>
            <textarea name="description" required><?php echo $product['description']; ?></textarea>

            <button type="submit">Cập Nhật</button>
        </form>

        <p><a href="index.php">Quay lại danh sách sản phẩm</a></p>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>