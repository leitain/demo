<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
header("content-type:text/html;charset=utf-8");
class IndexController extends Controller
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
	   * 首页
	   * @return [type] [description]
	   */
      public function index()
      {  
            ob_start();//打开缓冲区
            $time=3600;
            if (!is_file("../public/ob/ob.php") || time()-filemtime("../public/ob/ob.php")>1000){
                  $img=$this->common("");
                  $abstract=$this->common("/getcontent");
                  $consult=$this->common("/getnews");
                  $data['img']=$img;
                  $data['abstract']=$abstract;
                  $data['consult']=$consult;
                  $dat=json_encode($data);
                  //$content=ob_get_contents();//取得本php页面输出的全内容
                  $fp=fopen("../public/ob/ob.php","w+");//创建一个文件并打开
                  fwrite($fp,$dat);//把php页面的内容全部写入out
                  fclose($fp);
            } else {
                  ///echo "cache";
                  $data = file_get_contents("../public/ob/ob.php");
                  $img=  json_decode($data)->img;
                  $abstract=json_decode($data)->abstract;
                  $consult=json_decode($data)->consult;
            }
            return view('index/index',['arr'=>$img->data,'brr'=>$abstract->data,'crr'=>$consult->data]);
      }
      /**
       * 
	   * 入学需知
	   * @return [type] [description]
	   */
      public function mustknow()
      {
      	 return view('index/must-know');
      }
      /**
	   * 通知公告
	   * @return [type] [description]
	   */
      public function notice()
      {
      	 return view('index/notice');
      }
      /**
	   * 资料下载
	   * @return [type] [description]
	   */
      public function data()
      {
      	 return view('index/data');
      }
      /**
         * 公告详情
         * @return [type] [description]
         */
      public function noticeDetail()
      {
             return view('index/noticedetail');
      }
    
}