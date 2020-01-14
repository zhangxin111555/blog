<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-06 09:59:00
 * @LastEditTime: 2020-01-06 09:59:33
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekl extends Model
{
    protected $table = 'measurement';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
