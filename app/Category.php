<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2020-01-03 15:45:14
 * @LastEditTime : 2020-01-03 15:47:12
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    protected $primaryKey = 'cata_id';
    protected $guarded = [];   //黑名单  create只需要开启
}
