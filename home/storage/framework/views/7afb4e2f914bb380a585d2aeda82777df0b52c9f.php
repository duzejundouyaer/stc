<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/jquery.cityselect.js"></script>
		<script>
			$(document).ready(function() {
				
				$(".form").slideDown(500);
				
				$("#landing").addClass("border-btn");

				$("#registered").click(function() {
					$("#landing").removeClass("border-btn");
					$("#landing-content").hide(500);
					$(this).addClass("border-btn");
					$("#registered-content").show(500);
					
				})

				$("#landing").click(function() {
					$("#registered").removeClass("border-btn");
					$(this).addClass("border-btn");
					
					$("#landing-content").show(500);
					$("#registered-content").hide(500);
				})
			});
		</script>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: "微软雅黑";
			}
			
			body {
				background: #F7F7F7;
			}
			
			.form {
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -185px;
				margin-top: -210px;
				height: 420px;
				width: 340px;
				font-size: 18px;
				-webkit-box-shadow: 0px 0px 10px #A6A6A6;
				background: #fff;
			}
			
			.border-btn {
				border-bottom: 1px solid #ccc;
			}
			
			#landing,
			#registered {
				float: left;
				text-align: center;
				width: 170px;
				padding: 15px 0;
				color: #545454;
			}
			
			#landing-content {
				clear: both;
			}
			
			.inp {
				height: 30px;
				margin: 0 auto;
				margin-bottom: 30px;
				width: 200px;
			}
			
			.inp>input {
				text-align: center;
				height: 30px;
				width: 200px;
				margin: 0 auto;
				transition: all 0.3s ease-in-out;
			}
			
			.login {
				border: 1px solid #A6A6A6;
				color: #a6a6a6;
				height: 30px;
				width: 202px;
				text-align: center;
				font-size: 13.333333px;
				margin-left: 70px;
				line-height: 30px;
				margin-top: 30px;
				transition: all 0.3s ease-in-out;
			}
			
			.login:hover {
				background: #A6A6A6;
				color: #fff;
			}
			
			#bottom {
				margin-top: 30px;
				font-size: 13.333333px;
				color: #a6a6a6;
			}
			
			#registeredtxt {
				float: left;
				margin-left: 80px;
			}
			
			#forgotpassword {
				float: right;
				margin-right: 80px;
			}
			
			#photo {
				border-radius: 80px;
				border: 1px solid #ccc;
				height: 80px;
				width: 80px;
				margin: 0 auto;
				overflow: hidden;
				clear: both;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			
			#photo>img:hover {
				-webkit-transform: rotateZ(360deg);
				-moz-transform: rotateZ(360deg);
				-o-transform: rotateZ(360deg);
				-ms-transform: rotateZ(360deg);
				transform: rotateZ(360deg);
			}
			
			#photo>img {
				height: 80px;
				width: 80px;
				-webkit-background-size: 220px 220px;
				border-radius: 60px;
				-webkit-transition: -webkit-transform 1s linear;
				-moz-transition: -moz-transform 1s linear;
				-o-transition: -o-transform 1s linear;
				-ms-transition: -ms-transform 1s linear;
			}
			
			
			#registered-content {
				margin-top: 40px;
				display: none;
			}
			
			.fix {
				clear: both;
			}
			.form{
				display: none;
			}
		</style>
	</head>

	<body>
		<div class="form">
			<div id="landing"  style="cursor: pointer">登录</div>
			<div id="registered"  style="cursor: pointer">注册</div>
			<div class="fix"></div>
			<div id="landing-content">
				<div id="photo"><img src="Images/photo.jpg" /></div>
				<div class="inp"><input type="text" id="phone" placeholder="用户名" /></div>
				<div class="inp"><input type="password" id="pwd" placeholder="密码" /></div>
				<div class="login" id="button" style="cursor: pointer">登录</div>
				<div id="bottom"><span id="registeredtxt">立即注册</span><span id="forgotpassword">忘记密码</span></div>
			</div>
			<div id="registered-content">
				<div class="inp"><input type="text" id="mobile" placeholder="手机号" /></div>
				<div class="inp"><input type="password" id="r_pwd" placeholder="请输入密码" /></div>
				<div class="inp"><input type="password" id="r_re_pwd" placeholder="请再次输入密码" /></div>
				<div class="login register"  style="cursor: pointer">立即注册</div>
			</div>
		</div>
		<div style="text-align:center;">
</div>

	</body>
	<script>
		//登录
		$("#button").click(function () {
			var phone=$("#phone").val();
			var pwd=$("#pwd").val();
			if(phone!=''&&pwd!=''){
                $.ajax({
                    type:"get",
                    url: "manlogin",
                    data: {phone:phone,pwd:pwd},
                    success: function(msg){
//                        alert(msg);
                        if(msg==0){
                            history.go(-1)
						}else {
                            location.href='login'
						}
                    }
                });
			}
        })


		//注册
		$("#mobile").blur(function(){
		    var _this = $(this);
		    var mobile = _this.val();
		    var patt = /^1[34578]\d{9}$/;
            if(mobile == '')
			{
                _this.css({'color':'red'});
                _this.attr('placeholder','请输入手机号');
                _this.focus(function(){
                    _this.css({'color':'black'});
				})
			}
			else
			{
                if(patt.test(mobile))
                {
                    _this.css({'color':'black'});
                    var url = 'unique';
                    $.ajax({
                        url : url,
						type : 'get',
						data : 'phone='+mobile,
						success:function(msg)
						{
							if(msg == 0)
							{
                                _this.val('');
                                _this.css({'color':'red'});
                                _this.attr('placeholder','该手机号已注册过');
                                _this.focus(function(){
                                    _this.css({'color':'black'});
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
		$(".register").click(function(){
		    var phone = $("#mobile").val();
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
                        if(msg.msg==1){
                            location.href='complete?id='+msg.id;
						}
                    }
                });
			}
		})
	</script>
</html>