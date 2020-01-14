<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-07 19:14:36
 * @LastEditTime : 2020-01-07 19:52:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
class Goodss extends Controller
{
    public function tj(){
        //获取品牌分类
        $brand = Brand::get();
        //获取商品分类
        $Category = Category::get();
        $Category=createTree($Category);
        return view('admin.Goodss.tj',['brand'=>$brand],['Category'=>$Category]);
    }
}
