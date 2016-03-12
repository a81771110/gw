<?php 
include_once("../inc/head.php");

?>
<html>
<head>
<script type="text/javascript">
document.title='高速波移动ERP价格表';
</script>
<style>
.table thead tr th,.table td,.table tbody th{
	text-align:center;
	vertical-align:middle;}
.table th{
	font-size:1.3em;}
.font{
	font-size:1.5em;
	}
</style>
</head>
<body>
<div class="container-fluid">
<table class="table table-bordered table-striped">
   <caption class="font">VIP服务价格表</caption>
   <thead>
      <tr>
         <th>版本</th>
         <th>云平台类型</th>
         <th style="width:60px">用户数</th>
         <th>上传文件流量限制</th>
         <th>单个文件上传限制</th>
		 <th>数据库空间限制</th>
         <th>应用</th>
         <th>开发平台</th>
         <th style="width:60px">服务器集群</th>
         <th>价格</th>


      </tr>
   </thead>
   <tbody>
      <tr>
         <th><span>小岛体验版</span></th>
         <td >Saas公有云</td>
         <td >10</td>
         <td>10M</td>
         <td >1M</td>
		 <td>10M</td>
         <td>应用商店，不能下载应用，内置20个基础应用</td>
         <td>不能开发应用</td>
         <td>共享</td>
         <td>免费</td>


      </tr>
      <tr>
         <th><span>陆地VIP版</span></th>
         <td>Saas公有云</td>
         <td>100</td>
         <td>1000M</td>
         <td>5M</td>
		 <td>100M</td>
         <td>应用商店，可下载的免费应用>100个</td>
         <td>开发10个企业内应用</td>
         <td>共享</td>
         <td>免费，需提交营业执照和企业详细联系信息</td>

      </tr>
      <tr>
         <th><span>月球VIP版</span></th>
         <td>Saas公有云</td>
         <td>200</td>
         <td>200G</td>
         <td>50M</td>
		 <td>200M</td>
         <td>应用商店，价格＜500元的收费应用免费下</td>
         <td>开发100个企业内应用</td>
         <td>共享</td>
         <td>2万 ，一次投入，终身享有</td>

      </tr>
      <tr>
        <th><span>地球VIP版</span></th>
         <td>aas公有云</td>
         <td>不限</td>
         <td>1000GB</td>
         <td>100M</td>
		  <td>500M</td>
         <td>应用商店，价格＜5000元的收费应用免费下</td>
         <td>不限企业内应用开发数量</td>
         <td>共享</td>
         <td>5万 ，一次投入，终身享有</td>

      </tr>
      <tr>
        <th><span >太阳系VIP版</span></th>
         <td>Saas亚私有云</td>
         <td>不限</td>
         <td>不限</td>
         <td>200M</td>
		  <td>不限</td>
         <td>应用商店，所有收费应用均可免费下</td>
         <td>不限企业内应用开发数量</td>
         <td>独享</td>
         <td>适用于1000-10000用户，每用户每年100元。</td>


      </tr>
      <tr>
        <th><span >银河系VIP版</span></th>
         <td>Private Clouds 私有云部署</td>
         <td >不限</td>
         <td >不限</td>
         <td >不限</td>
		 <td >不限</td>
         <td >可定制的应用商店</td>
         <td>不限企业内应用开发数量，含不限量开发者账号</td>
         <td>独享</td>
         <td>适用于10000用户以上，一次性收费每用户200元，年度产品 升级费30%。</td>
      </tr>
	  <tr>
		<th colspan=10 style="text-align:center;"><a href="http://www.gsubo.com/app/app_store/p/index.php?to=buy">购买VIP服务</a></th>
	  </tr>
   </tbody>
</table>
</div>
</body>
</html>

<?
include_once("../inc/footer.php");
?>  