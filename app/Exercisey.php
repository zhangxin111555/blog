<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercisey extends Model
{
    protected $table = 'Exerciseyi';
    public $timestamps = false;
    protected $guarded = [];   //黑名单  create只需要开启
}
