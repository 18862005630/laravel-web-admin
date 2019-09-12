<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccount;
use App\Models\AdminRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 * 后端管理员相关
 *
 */
class AdminController extends Controller
{
    /**
     *
     *
     */
    public function addRole(){
        //管理员角色新增
//        $role = [
//            'name' => '超级管理员',
//            'privileges' => '0'
//        ];
//        AdminRole::updateOrCreate($role,$role);

        //管理员账号增加
        $account = [
            'account' => 'zyx',
            'password' => md5('zyx'.md5('123456789')),
            'role_id' => 1
        ];
        AdminAccount::updateOrCreate($account,$account);
        return "add account success";

    }
}
