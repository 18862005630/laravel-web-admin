<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Entity\SystemController as System;
use App\Models\AdminAccount;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;

class IndexController extends Controller
{
    protected $system;
    public function __construct()
    {
        $this->system = new System();
    }

    /**
     * 后台首页
     */
    public function index(){

        return view("index",$this->system->getOut());

    }

    /**
     * 管理員信息
     *
     */
    public function profile(){

        $this->system->setTitle("Profile");

        return view('profile',$this->system->getOut());
    }

    /**
     * 管理员设置页Set
     */
    public function set(){

        $this->system->setTitle("Setting");

        //获取该页面初始数据，进行页面渲染TODO
        $siteInfo = Setting::where('id',1)->first()->toArray();
        $this->system->setParams($siteInfo);


//        dd($this->system->getOut());


        return view("settings",$this->system->getOut());
    }

    /**
     * UI-BUTTONS
     *
     */
    public function uiButtons(){

        $this->system->setTitle("Buttons");

        return view("ui_buttons",$this->system->getOut());
    }
}
