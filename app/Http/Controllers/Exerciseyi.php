<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-02 09:41:09
 * @LastEditTime : 2020-01-06 15:27:52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercisey;
class Exerciseyi extends Controller
{
    public function tj()
    {
        return view('admin.Exerciseyi.tj');
    }

    public function tjyi(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:exerciser|max:255',
            'bm' => 'required',
            'zyx' => 'required',
            'xs' => 'required',
            'gh' => 'required',
        
        ],[
            'name.required'=>'标题名称必填',
            'name.unique'=>'标题名称已存在',
            'bm.required'=>'分类不能为空',
            'zyx.required'=>'重要性名称必填',
            'gh.required'=>'作者名称必填',
            'xs.required'=>'显示名称必填',
        ]);
        $data = $request->except(['_token']);
        // dd($data);die;
        if($request->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }        
        // $res = DB::table('brand')->insert($data);
        $res = Exercisey::create($data);
        // $res = Brand::insert($data);
        if($res){
            return redirect('/Exerciseyi/zs');
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
    public function zs(){
        $name = request()->name??'';
        $where = [];
        if($name){
            $where[]=['name','like',"%$name%"];
        }
        

        $data = Exercisey::where($where)->orderBy('id','desc')->paginate(2);
        $query = request()->all();  //搜索
        return view('admin.Exerciseyi.zs',['data'=>$data,'query'=>$query]);
    }
    //删除
    public function destroy($id)
    {
        // $res = DB::table('brand')->where('brand_id',$id)->delete();
        // $res = Exercisey::where('id',$id)->delete();
        $res = Exercisey::destroy($id);
        if($res){
            if(request()->ajax()){
                echo json_encode(['code'=>'00000','msg'=>'删除成功']);die;
            }
        }
        return redirect('/Exerciseyi/zs');
    }

    //修改
    public function edit($id)
    {
        $data = Exercisey::find($id);
        return view('admin.Exerciseyi.edit',['data'=>$data]);
    }

    public function updates(Request $request , $id)
    {
        // echo $id;
        $data = $request->except(['_token']);
        if($request->hasFile('logo')){
            $data['logo'] = $this->upload('logo');
        }     
        // $res = DB::table('brand')->where('brand_id',$id)->update($data);
        $res = Exercisey::where('id',$id)->update($data);
        if($res!==false){
            return redirect('/Exerciseyi/zs');
        }
    }

}
