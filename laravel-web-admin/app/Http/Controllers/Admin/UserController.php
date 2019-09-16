<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

/**
 * Class UserController
 * @package App\Http\Controllers\Admin
 * 管理员操作
 */
class UserController extends Controller
{
    /**
     * 管理员登录
     */
    public function login(Request $request){
//        //获取url中的参数
//        $str=$request->fullUrl();
//        $param = substr($str,strpos($str, '?')+1);
//        $param = explode("&",$param);
//        var_dump($param);
//        //获取url中的参数
//        dd($request->all());
        $map = [
            'account' => $request->account,
            'password' => md5(env('MD5_SALT').md5($request->password))
        ];
        $admin = AdminAccount::where($map)->first();
        if(empty($admin)){
            return json_encode([
                'code' => 500,
                'msg' => '账号密码不匹配'
            ],JSON_UNESCAPED_UNICODE);
        }

        return json_encode([
            'code' => 200,
            'msg' => '登录成功',
            'data' => $admin
        ],JSON_UNESCAPED_UNICODE);
    }
}
