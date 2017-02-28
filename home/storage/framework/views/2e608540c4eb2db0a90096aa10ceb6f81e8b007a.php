<?php $__env->startSection('title', 'TCS--订单页面'); ?>

<?php $__env->startSection('content'); ?>
    <center>
        <div style="height: 10px"></div>
        <h4>服务订单表</h4>
    <form action="order"  method="post" >
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <table >
            <tr>
                <td>昵称：</td>
                <td>
                    <input type="text" name="user_name" onblur="nickname()" />

                </td>
            </tr>
            <tr>
                <td>手机号：</td>
                <td><input type="text" name="user_phone"/></td>
            </tr>

            <tr>
                <td>地址：</td>
                <td><input type="text" name="user_address"/></td>
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
                <td><textarea name="fault_details" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <div style="height: 10px"></div>
            <tr>
                <td align="center">
                    <input type="submit"  value="提交"/>
                    <input type="reset"   value="重置"/>
                </td>

            </tr>
        </table>
    </form>
    </center>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>