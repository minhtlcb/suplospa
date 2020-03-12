
<!DOCTYPE html>
<html lang="en">

<body>
	
<p>Chào {{$user->name }}</p>
<p>
Tài khoản của bạn đã được tạo, vui lòng kích hoạt tài khoản của bạn bằng cách nhấp vào liên kết này</p>

<p><a href="{{ route('verify',$user->remember_token) }}">
	Xác nhận
	
</a></p>

<p>Thanks</p>

</body>

</html> 
