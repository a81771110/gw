<?php
include_once("../inc/head.php");
?>
<script type="text/javascript">
document.title='联系我们';
</script>        
    
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 col-sm-4">
                    <h1>联系我们</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
  <!--container start-->
    <div class="container">
         <div style="margin-bottom:50px;">
          <html xmlns="http://www.w3.org/1999/xhtml">
          <head>
          
          <!--引用百度地图API-->
          <style type="text/css">
              html,body{margin:0;padding:0;}
              .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
              .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
          </style>
          <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
          </head>
          
          <body>
            <!--百度地图容器-->
            <div style="width:100%;height:300px;border:#ccc solid 1px;" id="dituContent"></div>
          </body>
          <script type="text/javascript">
              //创建和初始化地图函数：
              function initMap(){
                  createMap();//创建地图
                  setMapEvent();//设置地图事件
                  addMapControl();//向地图添加控件
                  addMarker();//向地图中添加marker
              }
              
              //创建地图函数：
              function createMap(){
                  var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                  var point = new BMap.Point(116.30934,39.96571);//定义一个中心点坐标
                  map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
                  window.map = map;//将map变量存储在全局
              }
              
              //地图事件设置函数：
              function setMapEvent(){
                  map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                  map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                  map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                  map.enableKeyboard();//启用键盘上下左右键移动地图
              }
              
              //地图控件添加函数：
              function addMapControl(){
                  //向地图中添加缩放控件
              var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
              map.addControl(ctrl_nav);
                  //向地图中添加缩略图控件
              var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
              map.addControl(ctrl_ove);
                  //向地图中添加比例尺控件
              var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
              map.addControl(ctrl_sca);
              }
              
              //标注点数组
              var markerArr = [{title:"北京高速波软件有限公司",content:"我的备注",point:"116.308195|39.966581",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                   ];
              //创建marker
              function addMarker(){
                  for(var i=0;i<markerArr.length;i++){
                      var json = markerArr[i];
                      var p0 = json.point.split("|")[0];
                      var p1 = json.point.split("|")[1];
                      var point = new BMap.Point(p0,p1);
                      var iconImg = createIcon(json.icon);
                      var marker = new BMap.Marker(point,{icon:iconImg});
                      var iw = createInfoWindow(i);
                      var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                      marker.setLabel(label);
                      map.addOverlay(marker);
                      label.setStyle({
                                  borderColor:"#808080",
                                  color:"#333",
                                  cursor:"pointer"
                      });
                      
                      (function(){
                          var index = i;
                          var _iw = createInfoWindow(i);
                          var _marker = marker;
                          _marker.addEventListener("click",function(){
                              this.openInfoWindow(_iw);
                          });
                          _iw.addEventListener("open",function(){
                              _marker.getLabel().hide();
                          })
                          _iw.addEventListener("close",function(){
                              _marker.getLabel().show();
                          })
                          label.addEventListener("click",function(){
                              _marker.openInfoWindow(_iw);
                          })
                          if(!!json.isOpen){
                              label.hide();
                              _marker.openInfoWindow(_iw);
                          }
                      })()
                  }
              }
              //创建InfoWindow
              function createInfoWindow(i){
                  var json = markerArr[i];
                  var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                  return iw;
              }
              //创建一个Icon
              function createIcon(json){
                  var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                  return icon;
              }
              
              initMap();//创建和初始化地图
          </script>
          </html>
         </div> 
        <div class="row">
            <div class="col-lg-5 col-sm-5 address" style="margin-left:50px; margin-bottom:20px;">
                <h4 style="font-weight:bold;font-family: "microsoft yahei";font-size:16px;font-size:16px;color:#434343">联系我们</h4>
                <p>公司地址：北京市海淀区长春桥路11号万柳亿城中心C2座1905A</p>
                <p>邮政编码：100089</p>
             
                <p>电话：010-59421190</p>
                <p>邮箱:zhangming@gaosubo.com</p>
            </div>
                
			<div>
			<h4 style="font-weight:bold;font-family: "microsoft yahei";font-size:16px;color:#434343">银行账号</h4>
			    <p style="margin-top:19px;">户名： 北京高速波软件有限公司</p> 
                  <p> 账号： 110061118018010046467 </p>
                   <p> 开户行： 交通银行股份有限公司北京万柳支行 </p>
                     <p> 开户行代码：301100000816</p>
			</div>
            </div>
            </div>
    </div>
    <!--container end-->
<?
include_once("../inc/footer.php");
?>  