<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SelfController extends Controller
{     
	/**
	 * 自主入学首页
	 * @return [type] [description]
	 */
    public function index()
    {
      	return view('self/entrance');
    }
    /**
     * 自主报道
     * @return [type] [description]
     */
    public function selfreport()
    {
    	return view('self/selfreport');
    }
    /**
     * 绿色通道
     * @return [type] [description]
     */
    public function green()
    {
    	return view('self/green');
    }
    /**
     * 推迟报道
     * @return [type] [description]
     */
    public function delay()
    {
    	return view('self/delay');
    }

    /**
     * 到校路线
     * @return [type] [description]
     */
    public function route()
    {
    	return view('self/route');
    }
    /**
     * 抵校登记 个人信息
     * @return [type] [description]
     */
    public function arrive()
    {
        return view('self/arrive');
    }
    
}