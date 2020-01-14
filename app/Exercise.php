<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-03 09:02:44
 * @LastEditTime : 2020-01-03 09:09:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exerciser';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
