<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết phim - Đặt vé xem phim</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
        .navbar { background: #222; padding: 10px; text-align: center; }
        .navbar a { color: white; text-decoration: none; margin: 0 15px; font-size: 16px; }
        .navbar a:hover { text-decoration: underline; }
        .container { width: 80%; margin: auto; padding: 20px; background: #fff; margin-top: 20px; border-radius: 10px; }
        .footer { background: #333; color: white; padding: 10px 0; text-align: center; margin-top: 30px; }
        .movie-detail { display: flex; gap: 20px; align-items: flex-start; }
        .movie-detail img { width: 300px; height: 450px; object-fit: cover; border-radius: 10px; }
        .movie-info h2 { margin-top: 0; }
        .btn { display: inline-block; padding: 10px 20px; margin-top: 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; }
        .btn:hover { background: #218838; }
        .btn-secondary { background: #007bff; }
        .btn-secondary:hover { background: #0069d9; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Trang chủ</a>
        <a href="#">Phim đang chiếu</a>
        <a href="#">Lịch chiếu</a>
        <a href="#">Đăng nhập</a>
        <a href="#">Đăng ký</a>
    </div>

    <!-- Nội dung -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Hệ Thống Đặt Vé Xem Phim | Liên hệ: 0123 456 789</p>
    </div>

</body>
</html>
