<!-- products/index.php -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../../login.php');
    exit();
}

// Giả lập dữ liệu sản phẩm
$products = [
    ['id' => 1, 'name' => 'Sản phẩm A', 'price' => '100.000 VND'],
    ['id' => 2, 'name' => 'Sản phẩm B', 'price' => '200.000 VND'],
    ['id' => 3, 'name' => 'Sản phẩm C', 'price' => '300.000 VND'],
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <div class="logo">Logo Tùy Chỉnh</div>
        <nav>
            <a href="../../index.php">Trang Chủ</a>
            <a href="../../dashboard.php">Bảng Điều Khiển</a>
            <a href="../../logout.php">Đăng Xuất</a>
        </nav>
    </header>

    <main>
        <h1>Danh Sách Sản Phẩm</h1>
        <button onclick="window.location.href='create.php'">Thêm Sản Phẩm</button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $product['id']; ?>">Sửa</a> |
                            <a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2025 Quản lý sản phẩm. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
