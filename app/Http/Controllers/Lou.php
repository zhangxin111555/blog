<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-08 08:44:06
 * @LastEditTime : 2020-01-10 09:43:52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lo;
use App\Mail\SendCode;
use Illuminate\Support\Facades\mail;
class Lou extends Controller
{
    //验证qq邮箱发送
    public function sendemail(){
        Mail::to('3150289960@qq.com')->send(new SendCode());
    }


    //列表
    public function tj(){
        return view('admin.lou.tj');
    }
    //添加
    public function tjyi(){
        $data = request()->except(['_token']);
        // dd($data['imgs']);
        // dd($data);
        //单文件上传
        if(request()->hasFile('img')){
            $data['img'] = upload('img');
        }   
        //多文件上传     
        if(isset($data['imgs'])){
           
            $data['imgs'] = moreuploade('imgs');
            // dd($data);
            // die;
            $data['imgs'] = implode('|',$data['imgs']);
            
            }        
        // $res = DB::table('brand')->insert($data);
        
        $res = Lo::create($data);
        // $res = Brand::insert($data);
        if($res){
            return redirect('/Lou/zs');
        }
    }
   
    //展示
    public function zs(){
        $data = Lo::get();
        foreach($data as $v){
            if($v->imgs){
                $v->imgs = explode('|',$v->imgs);
            }
        }
        // dd($data);
        return view('admin.lou.zs',['data'=>$data]);
    }
    //展示2
    public function zss(){
        $data = Lo::get();
        foreach($data as $v){
            if($v->imgs){
                $v->imgs = explode('|',$v->imgs);
            }
        }
        // dd($data);
        return view('admin.lou.zss',['data'=>$data]);
    }
    //删除
    public function destroy($id)
    {
        $res = Lo::destroy($id);
        if($res){
            if(request()->ajax()){
                echo json_encode(['code'=>'00000','msg'=>'删除成功']);die;
            }
        }
        return redirect('/Lou/zs');
    }
    //预览
    public function show($id){
        // echo"$id";die;
        $data = Lo::find($id);
        dd($data);
    }
}
