<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-03 08:47:01
 * @LastEditTime : 2020-01-03 14:26:52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
class Exerciser extends Controller
{
    public function tj(){
        return view('admin.Exerciser.tj');
    }
    public function tjyi(Request $request)
    {
        //第一种
        $validatedData = $request->validate([
            'name' => 'required|unique:exerciser|max:255',
            'zz' => 'required',
        
        ],[
            'name.required'=>'书名名称必填',
            'name.unique'=>'书名名称已存在',
            'zz.required'=>'作者名称必填',
        ]);
        $data = $request->except(['_token']);
        // dd($data);die;
        if($request->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }        
        // $res = DB::table('brand')->insert($data);
        $res = Exercise::create($data);
        // $res = Brand::insert($data);
        if($res){
            return redirect('/Exerciser/zs');
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
public function zs(){
    aaa();
    $name = request()->name??'';
        $where = [];
        if($name){
            $where[]=['name','like',"%$name%"];
        }


    $data = Exercise::where($where)->paginate(2);
    $query = request()->all();  //搜索
    return view('admin.Exerciser.zs',['data'=>$data,'query'=>$query]);
}
//删除
public function destroy($id)
    {
        // $res = DB::table('brand')->where('brand_id',$id)->delete();
        $res = Exercise::where('id',$id)->delete();
        if($res){
            return redirect('/Exerciser/zs');
        }
    }
    //修改
    public function edit($id)
    {
        $data = Exercise::find($id);
        return view('admin.Exerciser.edit',['data'=>$data]);
    }

    public function updates(Request $request , $id)
    {
        // echo $id;
        $data = $request->except(['_token']);
        if($request->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }     
        // $res = DB::table('brand')->where('brand_id',$id)->update($data);
        $res = Exercise::where('id',$id)->update($data);
        if($res!==false){
            return redirect('/Exerciser/zs');
        }
    }
}
