<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
header("content-type:text/html;charset=utf-8");
class HelpController extends Controller
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
	   * 咨询帮助
	   * @return [type] [description]
	   */
      public function index()
      {
      	 return view('help/ask');
      }
      /**
	   * 常见问题
	   * @return [type] [description]
	   */
      public function commonquestion()
      {
          $data=$this->common("/commonquestion");
      	  return view('help/commonquestion',['arr'=>$data->data]);
      }
      /**
	   * 咨询解答
	   * @return [type] [description]
	   */
      public function answer()
      {
           $data=$this->common("/commonquestion");
           return view('help/answer',['arr'=>$data->data]);
      }
      /**
	   * 我的提问
	   * @return [type] [description]
	   */
      public function myanswer()
      {
           $data=$this->common("/myanawer");
      	   return view('help/myanswer',['arr'=>$data->data]);
      }
      /**
	   * 我要提问
	   * @return [type] [description]
	   */
      public function tiwen(){
      	   return view('help/tiwen');
      }
      /**
       * 下载中心
       * @return [type] [description]
       */
      public function uploaDate(Request $request)
      {
            $id=$_GET['id'];
            $data=$this->common("/uploaDate?id=".$id);
            return view('help/uploadate',['arr'=>$data->data]);
      }
    
}