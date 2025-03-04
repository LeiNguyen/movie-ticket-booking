<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Đặt vé xem phim</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f5f5f5; }
        .container { width: 80%; margin: auto; padding: 20px; }
        .header, .footer { background: #333; color: white; padding: 10px 0; text-align: center; }
        .navbar { background: #222; padding: 10px; text-align: center; }
        .navbar a { color: white; text-decoration: none; margin: 0 15px; font-size: 16px; }
        .navbar a:hover { text-decoration: underline; }
        .movie-list { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px; }
        .movie { background: white; padding: 10px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0,0,0,0.1); }
        .movie img { width: 100%; height: 300px; object-fit: cover; border-radius: 5px; }
        .movie h3 { margin: 10px 0; }
        .movie p { font-size: 14px; color: #555; }
        .movie a { display: block; text-align: center; background: #28a745; color: white; padding: 10px; border-radius: 5px; text-decoration: none; }
        .movie a:hover { background: #218838; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Trang chủ</a>
        <a href="#">Phim đang chiếu</a>
        <a href="#">Lịch chiếu</a>
        <a href="{{ route('login') }}">Đăng nhập</a>
        <a href="{{ route('register') }}">Đăng ký</a>
    </div>

    <!-- Header -->
    <div class="header">
        <h1>Hệ Thống Đặt Vé Xem Phim</h1>
    </div>

    <!-- Nội dung chính -->
    <div class="container">
        <h2>Danh sách phim</h2>
        <div class="movie-list">
            @foreach ($movies as $movie)
                <div class="movie">
                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="Ảnh phim">
                    <h3>{{ $movie->title }}</h3>
                    <p>{{ $movie->description }}</p>
                    <p>Thời lượng: {{ $movie->duration }}</p>
                    <a href="{{ route('movies.show', $movie->id) }}">Xem chi tiết & Đặt vé</a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Hệ Thống Đặt Vé Xem Phim | Liên hệ: 0123 456 789</p>
    </div>
</body>
</html>
