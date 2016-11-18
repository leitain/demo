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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="">
							<span class="book-tit">申请类型</span>
						     <select name="requesttype" id="" style="height:50px; width:500px;">
				            	<option value="" style="height:50px; width:500px;">请选择您的申请类型</option>
				            	<option value="缓交学费" style="height:50px; width:500px;">缓交学费</option>
				            	<option value="助学贷款" style="height:50px; width:500px;">助学贷款</option>
				            	<option value="免交学费" style="height:50px; width:500px;">免交学费</option>
		                    </select>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="username" placeholder="请输入姓名" />
								</li>
								<li>
									<span class="book-tit">性别</span>
									<select name="usex" id="" style="height:50px; width:500px;">
							            	<option value="" style="height:50px; width:500px;">请选择您的性别</option>
							            	<option value="男" style="height:50px; width:500px;">男</option>
							            	<option value="女" style="height:50px; width:500px;">女</option>
			                        </select>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="nation" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="movephone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="born" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="idcard" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="relation" placeholder="请填写您的手机联系号码" />
								</li>
								<li>
									<div class="">
										<span class="book-tit">户籍类型</span>
										<select name="housetype" id="" style="height:50px; width:500px;">
								        	<option value="" style="height:50px; width:500px;">请选择您的户籍类型</option>
								        	<option value="是" style="height:50px; width:500px;">是</option>
								        	<option value="否" style="height:50px; width:500px;">否</option>
		        						</select>
									</div>
								</li>
								<li>
									<div class="">
										<span class="book-tit">政治面貌</span>
										 <select name="nexus" id="" style="height:50px; width:500px;">
									        	<option value="" style="height:50px; width:500px;">请选择您的政治面貌</option>
									        	<option value="群众" style="height:50px; width:500px;">群众</option>
									        	<option value="团员" style="height:50px; width:500px;">团员</option>
									        	<option value="党员" style="height:50px; width:500px;">党员</option>
		        						</select>
									</div>
								</li>
								<li>
									<span class="book-tit">居住地址</span>
									<input type="text" name="location" placeholder="请所在地地址" />
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="address" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="memberone" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relationone" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="workone" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="incomeone" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="membertwo" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relationtwo" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="worktwo" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="incometwo" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="memberthree" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relationthree" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="workthree" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="incomethree" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea name="reason" id="reason"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a class="ta-center db" id="submit">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript" src="js/self.js"></script>
		</body>
</html>
<script>
	$("#submit").click(function(){
		 var requesttype=$("select[name='requesttype']").val()
		 var username=$("input[name='username']").val()
		 var usex=$("select[name='usex']").val()
		 var nation=$("input[name='nation']").val()
		 var movephone=$("input[name='movephone']").val()
		 var born=$("input[name='born']").val()
		 var idcard=$("input[name='idcard']").val()
		 var relation=$("input[name='relation']").val()
		 var housetype=$("select[name='housetype']").val()
		 var nexus=$("select[name='nexus']").val()
		 var location=$("input[name='location']").val()
		 var address=$("input[name='address']").val()
		 var memberone=$("input[name='memberone']").val()
		 var relationone=$("input[name='relationone']").val()
		 var workone=$("input[name='workone']").val()
		 var incomeone=$("input[name='incomeone']").val()
		 var membertwo=$("input[name='membertwo']").val()
		 var relationtwo=$("input[name='relationtwo']").val()
		 var worktwo=$("input[name='worktwo']").val()
		 var incometwo=$("input[name='incometwo']").val()
		 var memberthree=$("input[name='memberthree']").val()
		 var relationthree=$("input[name='relationthree']").val()
		 var workthree=$("input[name='workthree']").val()
		 var incomethree=$("input[name='incomethree']").val()
		 var reason=$("#reason").val()
		 var url="http://localhost/dayi/day1/lar/public/index.php/green";
		 var data={
		            requesttype:requesttype,
		        	username:username,
		        	usex:usex,
		        	nation:nation,
		        	movephone:movephone,
		        	born:born,
		        	idcard:idcard,
		        	relation:relation,
		        	housetype:housetype,
		        	nexus:nexus,
		        	location:location,
		        	address:address,
		        	memberone:memberone,
	                relationone:relationone,
	                workone:workone,
	                incomeone:incomeone,
	                membertwo:membertwo,
	                relationtwo:relationtwo,
	                worktwo:worktwo,
	                incometwo:incometwo,
	                memberthree:memberthree,
	                relationthree:relationthree,
	                workthree:workthree,
	                incomethree:incomethree,
	                reason:reason
		        }
		 jqueryAdd(url,data); 
	})
</script>