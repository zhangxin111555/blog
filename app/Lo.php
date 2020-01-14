<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-08 08:44:59
 * @LastEditTime : 2020-01-08 09:09:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lo extends Model
{
    protected $table = 'lou';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
