<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>注册(Register)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/supersized.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5.js"></script>
	<![endif]-->

</head>

<body>

<div class="page-container">
	<h1>注册(Register)</h1>
	<form action="" method="get">
		<input type="text" name="username" id="phone" class="username" placeholder="请输入您的手机号！">
		<input type="password" name="password"  id="r_pwd"  class="password" placeholder="请输入您的密码！">
		<input type="password" name="password"  id="r_re_pwd"  class="password" placeholder="请再次输入密码！">
		<button type="button" class="submit_button">注册</button>
	</form>
</div>
<!-- Javascript -->
<script src="assets/js/jquery-1.8.2.min.js" ></script>
<script src="assets/js/supersized.3.2.7.min.js" ></script>
<script src="assets/js/supersized-init.js" ></script>
<script src="assets/js/scripts.js" ></script>

</body>
<script src="js/jquery-3.1.1.min.js"></script>
<script>
	//注册
	$("#phone").blur(function(){
		var phone=$("#phone").val();
		var patt = /^1[34578]\d{9}$/;
		if(phone == '')
		{
			$("#phone").css({'color':'red'});
			$("#phone").attr('placeholder','请输入手机号');
			$("#phone").focus(function(){
				$("#phone").css({'color':'black'});
			})
		}
		else
		{
			if(patt.test(phone))
			{
				$("#phone").css({'color':'black'});
				var url = 'unique';
				$.ajax({
					url : url,
					type:'get',
					data : 'phone='+phone,
					success:function(msg)
					{
						if(msg == 0)
						{
							$("#phone").val('');
							$("#phone").css({'color':'red'});
							$("#phone").attr('placeholder','该手机号已注册过');
							$("#phone").focus(function(){
								$("#phone").css({'color':'black'});
							})
						}
					}
				})
			}
			else
			{
				$(this).css({'color':'red'});
				return false;
			}
		}
	})

	//验证密码
	$("#r_pwd").blur(function(){
		var _this = $(this);
		if(_this.val() == '')
		{
			_this.css({'color':'red'});
			_this.attr('placeholder','请输入6位以上密码');
			_this.focus(function(){
				_this.css({'color':'black'});
			})
		}
		else
		{
			if(_this.val().length < 6)
			{
				_this.css({'color':'red'});
				return false;
			}
			else
			{
				_this.css({'color':'black'});
			}
		}
	})

	//验证确认密码
	$("#r_re_pwd").blur(function(){
		var _this = $(this);
		var pwd = $("#r_pwd").val();
		if(_this.val() == '')
		{
			_this.css({'color':'red'});
			_this.attr('placeholder','请再次输入密码');
			_this.focus(function(){
				_this.css({'color':'black'});
			})
		}
		else if(_this.val() != pwd)
		{
			_this.css({'color':'red'});
			return false;
		}
		else
		{
			_this.css({'color':'black'});
		}

	})


	//注册
	$(".submit_button").click(function(){
		var phone = $("#phone").val();
		var pwd = $("#r_pwd").val();
		var r_pwd = $("#r_re_pwd").val();
		if(pwd != r_pwd)
		{
			alert('两次输入密码不一致');
			return false;
		}
		else
		{
			$.ajax({
				type:"get",
				url: "register",
				data: {phone:phone,pwd:pwd},
				dataType:"json",
				success: function(msg){
					if(msg.msg == 1){
						location.href='complete?id='+ msg.id;
					}
				}
			});
		}
	})
</script>
</html>

