<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-04 08:57:20
 * @LastEditTime : 2020-01-04 10:08:58
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Measurement;
class MeasurementControllers extends Controller
{
    public function tj(){
        return view('admin.Measurement.tj');
    }
    public function tjyi(){
        $validatedData = request()->validate([
            'name' => 'required|unique:measurement|max:255|regex:/^\w+s/',
            'zz' => 'required',
        
        ],[
            'name.required'=>'新闻名称必填',
            'name.regex'=>'新闻必须是字母数字下划线组成2-30位 ',
            'name.unique'=>'新闻名称已存在',
            'zz.required'=>'作者名称必填',
        ]);
        $data = request()->except('_token');
        // dd($data);die;
        $res = Measurement::insert($data);
        if($res){
            return redirect('/MeasurementControllers/zs');
        }
    }
   
}
