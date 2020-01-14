<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-03 14:33:06
 * @LastEditTime : 2020-01-04 11:29:47
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Category::get()->toArray();
        $data = Category::get();
        //无限极分类
        $data = createTree($data);
        // dd($data);
        return view('admin.cata.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::get();
        //无限极分类
        $data = createTree($data);
        // dd($data);
        return view('admin.cata.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // dd($data);die;
        $res = Category::insert($data);
        if($res){
            return redirect('/CategoryController/index');
        }
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
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
        $res = Category::where('cata_id',$id)->delete();
        if($res){
            return redirect('/CategoryController/index');
        }
    }
}
