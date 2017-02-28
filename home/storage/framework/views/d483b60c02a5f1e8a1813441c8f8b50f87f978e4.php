<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>tcs-服务商完善信息页面</title>

	<link href="css/demo.css" rel="stylesheet" />

	<script src="js/jquery-1.9.1.js"></script>
	<script src="layer/layer.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/jquery.cityselect.js"></script>

	<script>
        $(document).ready(function() {
            $("#city").citySelect({
                prov: "请选择",
                city: "请选择",
                dist: "请选择",
                nodata: "none"
            });

        });
        $(function  () {
//获取短信验证码
            var validCode=true;
            $(".msgs").click (function  () {
                var time=60;
                var code=$(this);
                console.log($(this))
                if (validCode) {
                    console.log(validCode)
                    validCode=false;
                    code.addClass("msgs1");
                    var t=setInterval(function  () {
                        time--;
                        code.html(time+"秒");
                        if (time==0) {
                            clearInterval(t);
                            code.html("重新获取");
                            validCode=true;
                            code.removeClass("msgs1");

                        }
                    },1000)
                }
            })
        })
        $(function(){
            $("#txtPhone").on("change",function(){
                var phone=$("#txtPhone").attr("data-mobile");
                var mobile=$("#txtPhone").val()
                console.log(phone)
                console.log(mobile)
                if(phone==""||phone!=mobile){
                    $(".regitem-mesage").show()
                };
            });
        })
	</script>
	<style>
		.all{
			width: 30px;
		}
		.nature{
			width: 30px;
		}
	</style>
</head>
<body>
<div id="dreg">
	<form action="addComplete" method="post" enctype="multipart/form-data">

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
		<center><div class="regtext-title" style="margin-top: 15px;"><h2>完善信息</h2></div></center>
	<div class="regitem">
		<span>店名</span>
		<input type="text" id="man_name" name="man_name" placeholder="服务商店名">
	</div>
	<?php /*<div class="regitem">*/ ?>
		<?php /*<span>联系电话</span>*/ ?>
		<?php /*<input type="text" id="txtPhone" name="txtPhone" data-mobile="13800138000" value="13800138000">*/ ?>
	<?php /*</div>*/ ?>

	<?php /*<div class="regitem-mesage">*/ ?>
		<?php /*<span></span>*/ ?>
		<?php /*<input type="text" id="mesage" name="mesage" placeholder="获取验证码">*/ ?>
		<?php /*<span class="msgs">获取验证码</span>*/ ?>
	<?php /*</div>*/ ?>

	<div class="regitem">
		<span>联系人</span>
		<input type="text" id="username" name="man_username" placeholder="服务商联系人">
	</div>

	<div class="regitem">
		<span>logo</span>
		<input type="file" style="width:200px;" id="logo" name="logo" >
	</div>

	<div class="regitem">
		<span>选择地址</span>
		<div id="city">
			<select class="prov" name="prov"></select>
			<select class="city" name="city" disabled="disabled"></select>
			<select class="dist" name="dist" disabled="disabled"></select>
		</div>
	</div>
	<div class="regitem">
		<span>详细地址</span>
		<input type="text" id="address" name="man_address" placeholder="详细地址">
	</div>
	<div class="regitem" style="height: 185px;">
		<span style="float: left;">服务性质</span>
			<ul style="list-style: none;float:right;height: 160px;margin-right: 50px;">
				<li><input type="checkbox" name="natureAll" class="all" value="1">全部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &nbsp;<input type="checkbox" name="nature[]" class="nature" value="大家电" >大家电</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="厨卫家电">厨卫家电
					<input type="checkbox" name="nature[]" class="nature" value="生活电器">生活电器</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="净化设备">净化设备
					<input type="checkbox" name="nature[]" class="nature" value="个人护理">个人护理</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="影音电器">影音电器
					<input type="checkbox" name="nature[]" class="nature" value="手机数码">手机数码</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="办公设备">办公设备
					<input type="checkbox" name="nature[]" class="nature" value="健身器材">健身器材</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="中央空调">中央空调
					<input type="checkbox" name="nature[]" class="nature" value="冰箱">冰箱</li>
				<li><input type="checkbox" name="nature[]" class="nature" value="洗衣机">洗衣机&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="nature[]" class="nature" value="手机">手机</li>
			</ul>
	</div>

	<div class="regitem">
		<span class="regitem-detail">描述</span>
		<textarea id="txtarea" name="man_desc" placeholder="描述"></textarea>
	</div>

		<input type="hidden" name="id" value="<?php echo e($id); ?>">
	<div class="regitem-but">
		<div class="dregbtn">

			<input type="submit" style="cursor: pointer;display:inline-block;background-color:#0089c8;height:.3rem;color:#FFFFFF;border-radius:5px;line-height:.3rem;width:1.1rem;" class="btn" value="确定"></div>

	</div>

	</form>
</div>
</body>
</html>
<script>
	//全选全不选
	$(".all").click(function(){
	    if(this.checked == true)
		{
			$(".nature").each(function(){
			    this.checked = true;
			})
		}
		else
		{
            $(".nature").each(function(){
                this.checked = false;
            })
		}
	})

</script>

