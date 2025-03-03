<h2>Đăng nhập</h2>
@if ($errors->any())
    <div>{{ $errors->first() }}</div>
@endif
<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng nhập</button>
</form>
<a href="/register">Đăng ký</a>
