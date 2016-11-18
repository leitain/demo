<?php
namespace App\libs;

use DB;

class response
{
    /**
     * 查询表里所有信息
     * @param  [type] $table [description]
     * @return [type]        [description]
     */
    static public function selectAll($table)
    {
          $data = DB::table($table)->get();
          return json_encode($data);
    }
	/**
     * 返回信息
     * @param  [type] $code    [description]
     * @param  string $message [description]
     * @param  array  $data    [description]
     * @return [type]          [description]
     */
    static public function json($code,$message='',$data=array())
    {
        if (!is_numeric($code)){
            return '';exit;
        }
        $result=array(
                'code'=>$code,
                'message'=>$message,
                'data'=>$data
            );
        return json_encode($result);
    }
    /**
     * 执行添加
     * @param [type] $table [description]
     * @param [type] $data  [description]
     */
    static public  function  add($table,$data)
    {
       $res=DB::table($table)->insert($data);
       return json_encode($res);
    }
    /**
     * 根据ID进行单条查询
     * @return [type] [description]
     */
    static public function selectOne($table,$id)
    {
        $data = DB::table($table)->where('id',$id)->first();
        return json_encode($data);
    }

}




?>