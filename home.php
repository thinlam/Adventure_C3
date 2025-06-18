<?php
session_start();

// Nếu chưa login mà có cookie → khôi phục login
if (!isset($_SESSION['user']) && isset($_COOKIE['remember_user'])) {
    $_SESSION['user'] = $_COOKIE['remember_user'];
}

// Nếu vẫn chưa có login → quay lại login
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Trang chính</title>
</head>
<body>
  <h2>Chào mừng, <?= htmlspecialchars($user) ?>!</h2>
  <p>Đây là trang chính sau khi đăng nhập.</p>
  <a href="logout.php">Đăng xuất</a>
</body>
</html>
