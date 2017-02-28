<?php $__env->startSection('title', 'TCS--订单页面'); ?>

<?php $__env->startSection('content'); ?>
    <center>
        <div style="height: 8px"></div>
        <h4 >服务订单表</h4>
    <form action="order"  method="post" onsubmit="return check()" >
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <table class="table" border="4px">
            <tr>
                <td>昵称：</td>
                <td>
                    <input  type="text" name="user_name"  />
                    <span id="user_name"></span>
                </td>
            </tr>
            <tr>
                <td>手机号：</td>
                <td>
                    <input type="text" name="user_phone" />
                    <span id="user_phone"></span>
                </td>
            </tr>

            <tr>
                <td>地址：</td>
                <td>
                    <input type="text" name="user_address" />
                    <span id="user_address"></span>
                </td>
            </tr>

            <tr>
                <td>维修类型：</td>
                <td>
                    <select name="type_name" id="">
                        <option value="0">---请选择---</option>
                        <option value="家电维修">家电维修</option>
                        <option value="电脑维修">电脑维修</option>
                        <option value="手机维修">手机维修</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>故障描述：</td>
                <td>
                    <textarea name="fault_details"  cols="30" rows="10"></textarea>
                </td>
            </tr>
            <div style="height: 10px"></div>
            <tr>
                <td  align="center" colspan="2" >
                    <input type="submit" value="提交" style="width: 70px;height: 40px"/>
                    <input type="reset"  value="重置" style="width: 70px;height: 40px"/>
                </td>
            </tr>
        </table>
    </form>
    </center>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script>

        //验证成功时的信息 elementID 为信息提示的html单元的id
        function validMsg(lang, valueType, elementID)
        {
            var msgInfo = "";
            var isCn = lang == "zh-cn";

            switch (valueType)
            {
                case "user_name":
                    msgInfo = isCn ? " √ 用户名称正确" : " √ the mail address is valided";
                    break;
                case "user_phone":
                    msgInfo = isCn ? " √ 手机号输入正确" : " √ The account valided ";
                    break;
                case "user_address":
                    msgInfo = isCn ? " √ 地址输入正确" : " √ Valided format!";
                    break;
                case "fault_details":
                    msgInfo = isCn ? " √ 内容输入正确" : " √ Valided format!";
                    break;
                default:
                    break;
            }
            document.getElementById(elementID).innerHTML = msgInfo;
            document.getElementById(elementID).style.color = "green";
        }

        //验证失败时的信息
        function errorMsg(lang, valueType, elementID)
        {
            var msgInfo = "";
            var isCn = lang == "zh-cn";

            switch (valueType)
            {
                case "user_name":
                    msgInfo = isCn ? " × 您输入的用户名有1--5位英文字母或者数字组成" : " × The e-mail format is error,plz input right format .eg. abc@def.com.";
                    break;
                case "user_phone":
                    msgInfo = isCn ? " × 请输入正确的手机号" : " × The account just ";
                    break;
                case "user_address":
                    msgInfo = isCn ? " × 请输入正确的地址" : " × inValided format!";
                    break;
                case "fault_details":
                    msgInfo = isCn ? " × 您输入的内容少了" : " × inValided format!";
                    break;
                //....对应增加其他情况
                default:
                    break;
            }
            document.getElementById(elementID).innerHTML = msgInfo;
            document.getElementById(elementID).style.color = "red";
        }

        var flag = 0;
        /*
         验证用户名
         */
        $("input[name='user_name']").blur(function(){
            var user_name = $("input[name='user_name']").val();
            var user_name_preg = /^\w{1,5}/;
            var user_name_test = user_name_preg.test(user_name);
            if(user_name_test){
                validMsg("zh-cn","user_name",'user_name');
                flag = 1;
            }else{
                errorMsg("zh-cn","user_name",'user_name')
                flag = 0;
            }
        });

        /*
         验证手机号
         */
        $("input[name='user_phone']").blur(function(){
            var user_phone = $("input[name='user_phone']").val();
            var user_phone_preg = /^1[3,5,8]\d{9}$/;
            var user_phone_test = user_phone_preg.test(user_phone);
            if(user_phone_test){
                validMsg("zh-cn","user_phone",'user_phone');
                flag = 1;
            }else{
                errorMsg("zh-cn","user_phone",'user_phone');
                flag = 0;
            }
        });

        /*
         验证地址
         */
        $("input[name='user_address']").blur(function(){
            var user_address = $("input[name='user_address']").val();
            var user_address_preg = /^[\u4e00-\u9fa5]{2,5}$/;
            var user_address_test = user_address_preg.test(user_address);
            if(user_address_test){
                validMsg("zh-cn","user_address",'user_address');
                flag = 1;
            }else{
                errorMsg("zh-cn","user_address",'user_address');
                flag = 0;
            }
        });

        function check(){

            if(flag==1){
                return true;
            }else{
                return false;
            }
        }

    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>