<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-31 08:04:06
 * @LastEditTime : 2019-12-31 10:56:05
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExerciseControlller extends Controller
{
    public function tj()
    {
        return view('admin.Exercise.tj');
    }

    public function tjyi()
    {
        // $data = request()->all();
        // dd($data);die;
        $data = request()->except(['_token']);
        // dd($data);die;
        $res = DB::table('exercise')->insert($data);
        if($res){
            return redirect('/Exercise/zs');
        }
    }

    public function zs()
    {
        
        $data = DB::table('exercise')->get();
        return view('admin.exercise.zs',['data'=>$data]);
    }
}
