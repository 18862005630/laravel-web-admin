<?php

namespace App\Http\Controllers\Entity;

class SystemController
{
   protected  $title = "Home";
   protected  $out = [
       'title' => "Home",
   ];

   public function setTitle($title){
       $this->title = $title;

       //更新输出
       $this->out = [
           'title' => $this->title,
       ];
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
