<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-27 15:22:55
 * @LastEditTime : 2019-12-30 10:53:32
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function data(){
        // $name="张.";
        return view('yi');
    }

    public function login(){
        $data = request()->all();
        dd($data);
    }

    public function goods($id){
        echo 'id:'.$id;
    }

    public function getgoods($goods,$name="zz"){
        echo 'id:'.$goods;
        echo '名著'.$name;
    }
}
