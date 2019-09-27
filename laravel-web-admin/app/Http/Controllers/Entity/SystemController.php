<?php

namespace App\Http\Controllers\Entity;

use App\Models\Setting;

class SystemController
{
    public $theme;
    public $copyright;
    //站点信息
   protected $site_info;
    //页面标题
   protected  $title = "Home";
   protected  $out = [
       'title' => "Home",
   ];

    //初始化成员变量
   public function __construct()
   {

       $this->site_info = Setting::where('id',1)->first()->toArray();
       $this->theme = $this->site_info['site_name'];
       $this->copyright = $this->site_info['copyright'];
       $this->out['theme'] = $this->theme;
       $this->out['copyright'] = $this->copyright;

   }

    //变更页面title
    public function setTitle($title){
       $this->title = $title;

       //更新输出
       $this->out['title']=$this->title;

   }

    /**
     * @param array $arr
     * 设置其他输出参数
     */
   public function  setParams(array $arr){
        foreach ($arr as $k => $v){
            $this->out[$k]=$v;
        }
   }

    /**
     * @return array
     * 跨包调用需要公开方法，受保护修饰则找不到该方法
     */
   public function getOut(){

        return $this->out;
   }

}
