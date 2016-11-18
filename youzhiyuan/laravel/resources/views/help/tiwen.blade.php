<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<base href="http://localhost/dayi/day1/laravel/public/">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea id="myask"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
			    <input type="hidden" name="time" value="<?php echo date("Y-m-d",time()); ?>">
			</div>
			</div>
			<div class="step-btn">
					<a class="ta-center db" id="submit">提交</a>
				</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript" src="js/self.js"></script>
		</body>

</html>
<script>
	$("#submit").click(function(){
		var myask=$("#myask").val();
		var time=$("input[name='time']").val();
		var url="http://localhost/dayi/day1/lar/public/index.php/myask";
		var data={
		            myask:myask,
		            date:time
		        }
		jqueryAdd(url,data);
		/*$.ajax({
		        url:"http://localhost/dayi/day1/lar/public/index.php/myask",
		        dataType:'jsonp',
		        data:{
		            myask:myask,
		            date:time
		        },
		        jsonp:'callback',
		        type : "GET",
		        success:function(msg) {
		        	alert("添加成功")
		        }
	      })*/
	})
</script>