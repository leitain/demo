<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Request;
use App\libs\response;

class IndexController extends Controller
{   
    /**
     * 公共代码
     * @param  [type] $table [description]
     * @return [type]        [description]
     */
    public function common($table)
    {
        $res=$_GET;
        unset($res['callback']);
        unset($res['_']);
        $re=response::add($table,$res);
        $callback=$_GET['callback'];
        if($re){
            return  $callback."(".json_decode($re).")";
        }else{
            return 1;
        }      
}
    /**
     * 查询公共
     * @return [type] [description]
     */
    public function commonselect($table)
    {
        $data= response::selectAll($table);
        return response::json(200,"搜索成功",json_decode($data));
    }
    /**
     * 轮播图
     * @return [type] [description]
     */
    public function getlunbo()
    {
        return $this->commonselect('lunbo');
    }
    /**
     * 校园简介
     * @return [type] [description]
     */
    public function getcontent()
    {
        return $this->commonselect('content');
    }
    /**
     * 校园咨询
     * @return [type] [description]
     */
    public function getnews()
    {
        return $this->commonselect('news');
    }
    /**
     * 添加个人信息
     * @return [type] [description]
     */
    public function userinfo(Request $request)
    {
       return $this->common('userinfo');
    }
    
    /**
     * 宿舍预定
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function dormbook(Request $request)
    {
        return $this->common('dormbook');
    } 
    /**
     * 抵校登记添加
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function arrive(Request $request)
    {
        return $this->common('arrive');
    }
    /**
     * 绿色通道添加
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function green(Request $request)
    {
        return $this->common('green');
    }

    /**
     * 推迟报道
     * @return [type] [description]
     */
    public function delay(Request $request)
    {
        return $this->common('delay');
    }
    /**
     * 常见问题
     * @return [type] [description]
     */
    public function commonquestion()
    {
        return $this->commonselect('commonquestion');
    }
    /**
     * 常见问题下载 
     * @return [type] [description]
     */
    public function uploaDate()
    {
       $id=$_GET['id'];
       $data=response::selectOne('commonquestion',$id);
       return response::json(200,"搜索成功",json_decode($data));
    }
    /**
     * 我要提问
     * @return [type] [description]
     */
    public function myask()
    {
        return $this->common('myask');
    }
    /**
     * 我的提问
     * @return [type] [description]
     */
    public function myanawer()
    {
        return $this->commonselect('myask');
    }
    /**
     * 报到单
     * @return [type] [description]
     */
    public function reportCard()
    {
      $id=$_GET['id'];
      $data=DB::select("select * from userinfo,arrive,dormbook where userinfo.d_id = dormbook.d_id and userinfo.a_id = arrive.a_id and userinfo.id=".$id);
      return response::json(200,"搜索成功",$data);
    }
}