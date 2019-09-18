<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class UserController
 * @package App\Http\Controllers\Admin
 * 管理员操作
 */
class UserController extends Controller
{
    /**
     * 管理员登录
     *
     */
    public function login(Request $request){
        //生成token
//        $user = AdminAccount::where('id',1)->first();
//        $token = JWTAuth::fromUser($user);
//        dd($token);

        //验证token
//      $user = JWTAuth::parseToken()->authenticate();

        //验证登录信息
        $credentials = [
            'account' => $request->account,
            'password' => $request->password
        ];

        //用户判断登录是否成功,只有登录成功才能获取用户信息
        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json([
                'code' => 401,
                'msg' => '账号密码不匹配'
            ],JSON_UNESCAPED_UNICODE);
        }

        //验证通过，则获取用户信息
//        $admin = auth()->user();

        return response()->json([
            'code' => 200,
            'msg' => '登录成功',
        ],JSON_UNESCAPED_UNICODE)->header('Authorization', 'Bearer '.$token);

    }

    /**
     * 管理员账号注册
     */
    public function  register(Request $request){

        //账号唯一性验证
        if(AdminAccount::where('account',$request->account)->first()){
            return response()->json([
                'code' => 201,
                'msg' => '当前账号已存在，请勿重复注册'
            ],JSON_UNESCAPED_UNICODE);
        }

        //进行账号注册
        $account = [
            'account' => $request->account,
            'password' => bcrypt($request->password),
        ];
        $admin = AdminAccount::Create($account,$account);
        //生成token
        $token = JWTAuth::fromUser($admin);

        return response()->json([
            'code' => 200,
            'msg' => '注册成功'
        ])->header('Authorization', 'Bearer '.$token);

    }

    /**
     * 登出
     */
    public function logout(){
//       var_dump('1111');
//        Auth::guard('api')->logout();
        JWTAuth::parseToken()->invalidate();
//        $a = JWTAuth::setToken(JWTAuth::getToken())->invalidate();
//        dd($a);

        return response()->json([
            'code' => 200,
            'msg' => '成功退出'
        ],JSON_UNESCAPED_UNICODE);
    }
}
