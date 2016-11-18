<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
header("content-type:text/html;charset=utf-8");
class UserController extends Controller
{    
       /**
       * 公共代码
       * @param  [type] $action [description]
       * @return [type]         [description]
       */
      public function common($action)
      {
           $url="http://localhost/dayi/day1/lar/public/index.php".$action;
           $arr=file_get_contents($url);
           return json_decode($arr);  
      }
        /**
         * 个人中心
         * @return [type] [description]
         */
	    public function index()
      {
	  	   return view('user/usercenter');
	    }
        /**
         * 个人信息
         * @return [type] [description]
         */
	    public function userinfo()
      {
            return view('user/userinfo');
	    }
	     /**
         * 宿舍预定
         * @return [type] [description]
         */
	    public function dormbook()
      {
            return view('user/dormbook');
	    }
	    /**
         * 宿舍预定
         * @return [type] [description]
         */
	    public function arrive()
      {
            return view('user/arrive');
	    }
	    /**
         * 报到单
         * @return [type] [description]
         */
	    public function reportCard()
      {
           $data=$this->common("/reportCard?id=1");
           return view('user/reportCard',['arr'=>$data->data[0]]);
	    }
       /**
         * 修改密码
         * @return [type] [description]
         */
       public function changepsw()
       {
            return view('user/changepsw');
       }
       /**
         * 退出
         * @return [type] [description]
         */
       public function loginout()
       {
            echo "退出";
       }

       

	    

    
}