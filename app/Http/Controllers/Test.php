<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-07 08:42:11
 * @LastEditTime : 2020-01-14 10:57:47
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tes;
class Test extends Controller
{
    //列表
    public function tj(){
        return view('admin.test.tj');
    }
    //添加
    public function tjyi(){
        $data = request()->except(['_token']);
        // dd($data);die;
        if(request()->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }        
        $res = Tes::create($data);
        if($res){
            return redirect('/Test/zs');
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
//展示
    public function zs (){

        $data = Tes::orderBy('id','desc')->paginate(2);
        if(request()->ajax()){
            return view('admin.test.ajaxindex',['data'=>$data]);
        }else {
            return view('admin.test.zs',['data'=>$data]);
        }
        
    }
//删除
    public function destroy($id)
    {
        $res = Tes::where('id',$id)->delete();
        if($res){
            return redirect('/Test/zs');
        }
    }
    //唯一性
    public function wyx(){
        $name = request()->name;
        $where=[];
        if($name){
            $where['name'] = $name;
        }
        $count = Tes::where($where)->count();
        echo intval($count);
    }
    // public function show($id){
    //     $res = Tes::setnx('show_'.$id,1);
    //     if(!$res){
    //         Tes::incr('show_'.$id);
    //     }
    //     $c
    //     // $tes = Tes::find($id);
    //     // dd($tes);
    //     return view('admin.test.show');
    // }
    
}
