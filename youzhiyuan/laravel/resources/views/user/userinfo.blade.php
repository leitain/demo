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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png">
					<input type="file" name="myfile" />
				</span>
				<p>上传头像</p>
			</li>
 			<li>
			   <span class="book-tit">姓名</span>
			    <input type="text" name="uname" placeholder="请输入姓名" /> 
			</li>
			<li>
			   <span class="book-tit">性别</span>
               <select name="ucard" id="" style="height:50px; width:500px;">
	            	<option value="" style="height:50px; width:500px;">请选择您的性别</option>
	            	<option value="男" style="height:50px; width:500px;">男</option>
	            	<option value="女" style="height:50px; width:500px;">女</option>
		        </select>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="uemail" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="uphone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="telphone" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="umobilphone" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
		            <select name="ucard" id="" style="height:50px; width:500px;">
		            	<option value="" style="height:50px; width:500px;">请选择户口是否迁移</option>
		            	<option value="是" style="height:50px; width:500px;">是</option>
		            	<option value="否" style="height:50px; width:500px;">否</option>
		            </select>
		       </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <select name="nexus" id="" style="height:50px; width:500px;">
		        	<option value="" style="height:50px; width:500px;">请选择您的政治面貌</option>
		        	<option value="群众" style="height:50px; width:500px;">群众</option>
		        	<option value="团员" style="height:50px; width:500px;">团员</option>
		        	<option value="党员" style="height:50px; width:500px;">党员</option>
		        </select>
		       </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="umanone" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="urelationone" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人2电话</span>
			    <input type="text" name="umantwo" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="urelationtwo" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="location" placeholder="所在地地址"/> 
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="adress" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="dormbook" class="ta-center db" id="next">下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>	
  <script type="text/javascript" src="js/self.js"></script>	
	</body>
</html>
<script>
	$("#next").click(function(){
		 var myfile=$("input[name='myfile']").val()
		 var uname=$("input[name='uname']").val()
		 var uemail=$("input[name='uemail']").val()
		 var uphone=$("input[name='uphone']").val()
		 var telphone=$("input[name='telphone']").val()
		 var umobilphone=$("input[name='umobilphone']").val()
		 var ucard=$("select[name='ucard']").val()
		 var nexus=$("select[name='nexus']").val()
		 var umanone=$("input[name='umanone']").val()
		 var urelationone=$("input[name='urelationone']").val()
		 var umantwo=$("input[name='umantwo']").val()
		 var urelationtwo=$("input[name='urelationtwo']").val()
		 var adress=$("input[name='adress']").val()
		 var url="http://localhost/dayi/day1/lar/public/index.php/userinfo";
		 var data={
		            uname:uname,
		        	uemail:uemail,
		        	uphone:uphone,
		        	telphone:telphone,
		        	umobilphone:umobilphone,
		        	ucard:ucard,
		        	nexus:nexus,
		        	umanone:umanone,
		        	urelationone:urelationone,
		        	umantwo:umantwo,
	                urelationtwo:urelationtwo,
	                adress:adress
		        }
		 jqueryAdd(url,data);
	})
</script>