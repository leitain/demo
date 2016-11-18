
function  jqueryAdd(url,data){
	  $.ajax({
		        url:url,
		        dataType:'jsonp',
		        data:data,
		        jsonp:'callback',
		        type : "GET",
		        success:function(msg) {
		        	alert("添加成功")
		        }
	      })
} 