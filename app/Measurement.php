<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-04 09:19:54
 * @LastEditTime: 2020-01-04 09:20:38
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $table = 'measurement';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
