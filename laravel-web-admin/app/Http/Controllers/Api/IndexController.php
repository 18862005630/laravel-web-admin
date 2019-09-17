<?php

namespace App\Http\Controllers\Api;

use App\Models\AdminAccount;
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
}
