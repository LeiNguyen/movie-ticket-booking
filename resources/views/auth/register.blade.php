<h2>Đăng ký</h2>
@if ($errors->any())
    <div>{{ $errors->first() }}</div>
@endif
<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Họ và tên" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>
<a href="/login">Đăng nhập</a>
