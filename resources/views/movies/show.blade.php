@extends('layouts.app')

@section('content')
    <div class="movie-detail" style="display: flex; gap: 30px; align-items: flex-start;">
        <!-- Poster phim -->
        <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}" style="width: 300px; height: 450px; object-fit: cover; border-radius: 10px;">

        <!-- Thông tin phim -->
        <div class="movie-info">
            <h1>{{ $movie->title }}</h1>
            <p><strong>Thể loại:</strong> {{ $movie->genre }}</p>
            <p><strong>Thời lượng:</strong> {{ $movie->duration }} phút</p>
            <p><strong>Mô tả:</strong> {{ $movie->description }}</p>
            <p><strong>Ngày phát hành:</strong> {{ $movie->release_date }}</p>

            <h3>Suất chiếu</h3>
            @if($movie->showtimes->count())
            <ul style="list-style: none; padding: 0;">
                @foreach($movie->showtimes as $showtime)
                    <li style="margin-bottom: 20px; padding: 15px; border: 1px solid #ccc; border-radius: 8px;">
                        <form action="{{ route('book.ticket') }}" method="POST">
                            @csrf
                            <p><strong>Thời gian:</strong> {{ $showtime->start_time }}</p>
                            <p><strong>Giá vé:</strong> {{ number_format($showtime->price) }} VND</p>
                            <label>Chọn ghế:</label>
                            <input type="text" name="seats[]" required placeholder="VD: A1, A2">
                            <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">
                            <br>
                            <button type="submit" style="margin-top: 10px; padding: 8px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">Đặt vé</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            @else
                <p>Phim hiện chưa có suất chiếu nào.</p>
            @endif
            
            <a href="{{ route('home') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;">Quay lại trang chủ</a>
        </div>
    </div>
@endsection
