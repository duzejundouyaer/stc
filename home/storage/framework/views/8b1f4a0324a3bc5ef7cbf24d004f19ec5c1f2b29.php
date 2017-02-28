<?php $__env->startSection('title', 'TCS--联系我们'); ?>

<?php $__env->startSection('content'); ?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <style type="text/css">
            body, html {width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
            #allmap{height:300px;width:100%;}
            #r-result,#r-result table{width:100%;}
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=mlktMf1VhgQXqgwMHU1uBl2EEdHNPRTM"></script>
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <title>根据起终点名称驾车导航</title>
    </head>
    <body>

    <div id="allmap"></div>
    <div id="driving_way">
        <input type="text" name="start" id="start" placeholder="请输入您的出发点">
        <select>
            <option value="0">最少时间</option>
            <option value="1">最短距离</option>
            <option value="2">避开高速</option>
        </select>
        <input type="button" id="result" style="width:auto;line-height: 37px;height: 40px;background: #3ec9ad none repeat scroll 0 0;border: 0 none;border-radius: 0;color: #ffffff;cursor: pointer;font-size: 15px;font-weight: normal;margin: 0;padding: 0px 10px ;text-indent: 0;text-shadow: none;transition: all 0.2s ease 0s;right: 0;top:5px;" value="查询"/>
    </div>
    <div id="r-result"></div>
    </body>
    </html>
    <script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("allmap");
        var end = "北京市海淀区上地街道";
        map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
        //三种驾车策略：最少时间，最短距离，避开高速
        var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
        $("#result").click(function(){
            map.clearOverlays();
            var start = $("#start").val();
            var i=$("#driving_way select").val();
            search(start,end,routePolicy[i]);
            function search(start,end,route){
                var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
                driving.search(start,end);
            }
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>