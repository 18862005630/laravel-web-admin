<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * 后台首页
     */
    public function index(){

        return view("index");
    }

    /**
     * 管理員信息
     *
     */
    public function profile(){

        return view('profile');
    }
}
