<?php
include_once("../inc/head.php");
?>
<script type="text/javascript">
document.title='��ϵ����';
</script>        
    
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row" >
                <div class="col-lg-4 col-sm-4">
                    <h1>��ϵ����</h1>
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
          
          <!--���ðٶȵ�ͼAPI-->
          <style type="text/css">
              html,body{margin:0;padding:0;}
              .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
              .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
          </style>
          <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
          </head>
          
          <body>
            <!--�ٶȵ�ͼ����-->
            <div style="width:100%;height:300px;border:#ccc solid 1px;" id="dituContent"></div>
          </body>
          <script type="text/javascript">
              //�����ͳ�ʼ����ͼ������
              function initMap(){
                  createMap();//������ͼ
                  setMapEvent();//���õ�ͼ�¼�
                  addMapControl();//���ͼ��ӿؼ�
                  addMarker();//���ͼ�����marker
              }
              
              //������ͼ������
              function createMap(){
                  var map = new BMap.Map("dituContent");//�ڰٶȵ�ͼ�����д���һ����ͼ
                  var point = new BMap.Point(116.30934,39.96571);//����һ�����ĵ�����
                  map.centerAndZoom(point,18);//�趨��ͼ�����ĵ�����겢����ͼ��ʾ�ڵ�ͼ������
                  window.map = map;//��map�����洢��ȫ��
              }
              
              //��ͼ�¼����ú�����
              function setMapEvent(){
                  map.enableDragging();//���õ�ͼ��ק�¼���Ĭ������(�ɲ�д)
                  map.enableScrollWheelZoom();//���õ�ͼ���ַŴ���С
                  map.enableDoubleClickZoom();//�������˫���Ŵ�Ĭ������(�ɲ�д)
                  map.enableKeyboard();//���ü����������Ҽ��ƶ���ͼ
              }
              
              //��ͼ�ؼ���Ӻ�����
              function addMapControl(){
                  //���ͼ��������ſؼ�
              var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
              map.addControl(ctrl_nav);
                  //���ͼ���������ͼ�ؼ�
              var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
              map.addControl(ctrl_ove);
                  //���ͼ����ӱ����߿ؼ�
              var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
              map.addControl(ctrl_sca);
              }
              
              //��ע������
              var markerArr = [{title:"�������ٲ�������޹�˾",content:"�ҵı�ע",point:"116.308195|39.966581",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                   ];
              //����marker
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
              //����InfoWindow
              function createInfoWindow(i){
                  var json = markerArr[i];
                  var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                  return iw;
              }
              //����һ��Icon
              function createIcon(json){
                  var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                  return icon;
              }
              
              initMap();//�����ͳ�ʼ����ͼ
          </script>
          </html>
         </div> 
        <div class="row">
            <div class="col-lg-5 col-sm-5 address" style="margin-left:50px; margin-bottom:20px;">
                <h4 style="font-weight:bold;font-family: "microsoft yahei";font-size:16px;font-size:16px;color:#434343">��ϵ����</h4>
                <p>��˾��ַ�������к�����������·11�������ڳ�����C2��1905A</p>
                <p>�������룺100089</p>
             
                <p>�绰��010-59421190</p>
                <p>����:zhangming@gaosubo.com</p>
            </div>
                
			<div>
			<h4 style="font-weight:bold;font-family: "microsoft yahei";font-size:16px;color:#434343">�����˺�</h4>
			    <p style="margin-top:19px;">������ �������ٲ�������޹�˾</p> 
                  <p> �˺ţ� 110061118018010046467 </p>
                   <p> �����У� ��ͨ���йɷ����޹�˾��������֧�� </p>
                     <p> �����д��룺301100000816</p>
			</div>
            </div>
            </div>
    </div>
    <!--container end-->
<?
include_once("../inc/footer.php");
?>  