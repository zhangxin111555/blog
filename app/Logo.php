<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-04 13:27:13
 * @LastEditTime: 2020-01-04 13:28:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logo';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
