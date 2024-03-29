<?php

namespace App\Http\Controllers\Api;

use App\Models\AdminAccount;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function index(){
       //获取登录管理员
       $userInfo = AdminAccount::from('admin_accounts as a')
           ->leftjoin('admin_roles as b','a.role_id','b.id')
           ->where('a.id',1)
           ->select('a.account','b.name')
           ->first();

       $data['userInfo'] = $userInfo;

       return json_encode([
           'code' => 200,
           'msg' => 'success',
           'data' => $data
       ],JSON_UNESCAPED_UNICODE);
   }

    /**
     * 修改参数POST
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function modifySite(Request $request){
       $key = $request->key;
       $value = $request->value;
       //更新操作
       Setting::where('id',1)->update([$key => $value]);

        //更新成功后返回结果
        return response()->json([
            'code'=>200,
            'msg' => "success",
            'data' => $value
        ],JSON_UNESCAPED_UNICODE);
    }
}
