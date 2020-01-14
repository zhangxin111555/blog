<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-07 08:44:01
 * @LastEditTime : 2020-01-07 08:58:07
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tes extends Model
{
    protected $table = 'test';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
