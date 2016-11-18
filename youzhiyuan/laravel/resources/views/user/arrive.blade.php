<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <base href="http://localhost/dayi/day1/laravel/public/">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
		        <select name="trainlation" id="" style="height:50px; width:500px;">
		            	<option value="" style="height:50px; width:500px;">请选择您到达学校的交通工具</option>
		            	<option value="飞机" style="height:50px; width:500px;">飞机</option>
		            	<option value="火车" style="height:50px; width:500px;">火车</option>
		            	<option value="汽车" style="height:50px; width:500px;">汽车</option>
		        </select>
		   </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="arrive" placeholder="请选择您目的地的站点位置"/>  
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="gotime" placeholder="请填写您的出发时间"/>  
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="arrivetime" placeholder="请选择您的预计到达时间"/>  
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <select name="peitong" id="" style="height:50px; width:500px;">
		            	<option value="" style="height:50px; width:500px;">请选择是否有人陪同</option>
		            	<option value="是" style="height:50px; width:500px;">是</option>
		            	<option value="否" style="height:50px; width:500px;">否</option>
		            </select>  
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <select name="peitongnum" id="" style="height:50px; width:500px;">
		            	<option value="" style="height:50px; width:500px;">请选择您的陪同人数</option>
		            	<option value="1" style="height:50px; width:500px;">1</option>
		            	<option value="2" style="height:50px; width:500px;">2</option>
		            	<option value="3" style="height:50px; width:500px;">3</option>
		            	<option value="4" style="height:50px; width:500px;">4</option>
		        </select> 
			</li>
		</ul>
		<div class="step-btn">
			    <a href="dormbook">上一步</a>
				<a href="reportCard" id="next">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
      <script type="text/javascript" src="js/self.js"></script>	
	</body>
</html>
<script>
	$("#next").click(function(){
		 var trainlation=$("select[name='trainlation']").val()
		 var arrive=$("input[name='arrive']").val()
		 var gotime=$("input[name='gotime']").val()
		 var arrivetime=$("input[name='arrivetime']").val()
		 var peitong=$("select[name='peitong']").val()
		 var peitongnum=$("select[name='peitongnum']").val()
		 var url="http://localhost/dayi/day1/lar/public/index.php/arrive";
		 var data={
		            trainlation:trainlation,
		        	arrive:arrive,
		        	gotime:gotime,
		        	arrivetime:arrivetime,
		        	peitong:peitong,
		        	peitongnum:peitongnum
		        }
		 jqueryAdd(url,data); 
	})
</script>