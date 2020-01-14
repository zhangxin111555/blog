<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-30 11:21:49
 * @LastEditTime : 2020-01-13 11:19:58
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use App\Http\Requests\StoreBrandPost;
use Illuminate\Support\Facades\Cache;
use Validator;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // //cache 门面
        // Cache::put('key', 'value', $seconds); //存储
        // Cache::put('key'); //获取
        // Cache::forget('key');  //删除
        // //全局辅助函数
        // cache(['key'=>'value'],$seconds); //存储
        // $value = $cache('key'); //删除
        
        // $data = DB::table('brand')->orderBy('brand_id','desc')->paginate(2);
        //搜索
        $name = request()->name??'';
        $page = request()->page?:1;
        echo 'brand_'.$page.'_'.$name;
        $data = cache::get('brand_'.$page.'_'.$name);   //存值
        dump($data);    
        if(!$data){
            echo "走db";
            $where = [];
            if($name){
                $where[]=['brand_name','like',"%$name%"];
            }
            $data = Brand::where($where)->orderBy('brand_id','desc')->paginate(2);

            //存入缓存时间
            Cache::put(['brand_'.$page.'_'.$name=>$data],20);
        }
        $query = request()->all();  //搜索
        if(request()->ajax()){
            return view('admin.brand.ajaxindex',['data'=>$data,'query'=>$query]);
        }
        return view('admin.brand.index',['data'=>$data,'query'=>$query]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //第二种
    // public function store(StoreBrandPost $request)
    {
        // //第一种
        // $validatedData = $request->validate([
        //     'brand_name' => 'required|unique:brand|max:255',
        //     'brand_url' => 'required',
        
        // ],[
        //     'brand_name.required'=>'品牌名称必填',
        //     'brand_name.unique'=>'品牌名称已存在',
        //     'brand_url.required'=>'网址名称必填',
        // ]);
        $data = $request->except(['_token']);
            //第三种
            $validator = Validator::make($data, [
            'brand_name' => 'required|unique:brand|max:255',
            'brand_url' => 'required',
            ],[
                    'brand_name.required'=>'品牌名称必填',
                    'brand_name.unique'=>'品牌名称已存在',
                    'brand_url.required'=>'网址名称必填',
                ]);
                if ($validator->fails()) {
                return redirect('Brand/create')
                ->withErrors($validator)
               ->withInput();
                }
               
        // dd($data);
        if($request->hasFile('brand_logo')){
            $data['brand_logo'] = $this->upload('brand_logo');
        }        
        // $res = DB::table('brand')->insert($data);
        $res = Brand::create($data);
        // $res = Brand::insert($data);
        if($res){
            return redirect('/Brand/index');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *编辑
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // $data = DB::table('brand')->where('brand_id',$id)->first();
        // $data = Brand::where('brand_id',$id)->first();
        $data = Brand::find($id);
        return view('admin.brand.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request , $id)
    {
        // echo $id;
        $data = $request->except(['_token']);
        if($request->hasFile('brand_logo')){
            $data['brand_logo'] = $this->upload('brand_logo');
        }     
        // $res = DB::table('brand')->where('brand_id',$id)->update($data);
        $res = Brand::where('brand_id',$id)->update($data);
        if($res!==false){
            return redirect('/Brand/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $res = DB::table('brand')->where('brand_id',$id)->delete();
        $res = Brand::where('brand_id',$id)->delete();
        if($res){
            return redirect('/Brand/index');
        }
    }
}
