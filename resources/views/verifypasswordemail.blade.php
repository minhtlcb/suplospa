<!DOCTYPE html>
<html lang="en">
<title>Quên mật khẩu</title>
<body>
	<p>Bạn đã yêu cầu lại mật khẩu cho tài khoản: {{$user->name }}</p>
	<p>Để cài lại mật khẩu vui lòng ấn</p>
	<p>
		<a href="{{ route('verifypass',$user->remember_token) }}">Đổi mật khẩu</a>
	</p>
	<p>Thanks</p>
	</body>
</html> 
