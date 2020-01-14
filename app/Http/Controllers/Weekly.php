<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-06 09:42:14
 * @LastEditTime : 2020-01-06 10:07:49
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weekl;
class Weekly extends Controller
{
    //z添加
    public function tj(){
        return view('admin.Weekly.tj');
    }
    //添加1
    public function tjyi(){
        $data = request()->except(['_token']);
        // dd($data);die;
        if(request()->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }        
        // $res = DB::table('brand')->insert($data);
        $res = Weekl::insert($data);
        // $res = Brand::insert($data);
        if($res){
            return redirect('/Weekly/zs');
        }
        
    }

    //文件上传
    public function upload($filename){
        if (request()->file($filename)->isValid()) {
                    $photo = request()->file($filename);
                    $store_result = $photo->store('public');
                    return $store_result;
                    }
                exit('没有文件上传或者上传有误');
}
}
