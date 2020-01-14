<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-31 11:53:39
 * @LastEditTime : 2019-12-31 14:14:53
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    public $timestamps = false;
    protected $primaryKey = 'brand_id';
    protected $guarded = [];   //黑名单  create只需要开启
}
