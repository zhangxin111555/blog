<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-04 11:28:45
 * @LastEditTime : 2020-01-10 13:54:39
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
class LogoControllers extends Controller
{
    public function tj(){
        
        return view('admin.logo.tj');
    }

    //Brand/index

    // public function tjyi(){
    //     $data = request()->except(['_token']);
    //     $res = Logo::where($data)->first();
    //     if($res){
    //         session(['logo'=>$res]);
    //         request()->session()->save();
    //         return redirect('/Brand/index');
    //     }
    //     return redirect('Logo/tj')->with('msg','没有此用户！请联系管理员');
    // }
    public function tjyi(){
        $data = request()->except(['_token']);
        // dd($data);die;
        $res = Logo::where($data)->first();
        if($res['c_id']==1){
            session(['logo'=>$res]);
            request()->session()->save();
            return redirect('/Lou/zs');
        }
        if($res['c_id']==2){
            session(['logo'=>$res]);
            request()->session()->save();
            return redirect('/Lou/zss');
        }
        // return redirect('Logo/tj')->with('msg','没有此用户！请联系管理员');
    }
    public function tc(){
            session(['logo'=>null]);
            request()->session()->save();

            return redirect('Logo/tj');
    }
}
