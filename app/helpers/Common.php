<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-03 14:06:45
 * @LastEditTime : 2020-01-08 11:52:51
 */
function aaa(){
    echo 123;
}

//无限极分类
function createTree( $data,$parent_id=0,$level=0){
    static $new_array = [];
    if(!$data){
        return;
    }
    foreach( $data as $k=>$v){
        if($v->parent_id==$parent_id){
            $new_array[]=$v;
            $v->level = $level;
            createTree( $data,$v->cata_id,$level+1);
        }
    }
    return $new_array;
}

 //单文件上传
 function upload($filename){
    if (request()->file($filename)->isValid()) {
                $photo = request()->file($filename);
                $store_result = $photo->store('public');
                return $store_result;
                }
            exit('没有文件上传或者上传有误');
}

//多文件上传
function moreuploade($imgs){
    
    if(!$imgs){
    return;
    }
    $imgs = request()->file($imgs);
    // $imgs= json_encode($imgs);
    // $imgs=json_decode($imgs,true);

    // dd($imgs);
    $result=[];
    foreach($imgs as $v){
        $result[]=$v->store('public');
    }
        // dd($result);die;
        return $result;
    }

?>