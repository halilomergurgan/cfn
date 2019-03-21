<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menus extends Model
{
    protected $table = 'menus';
    protected $guarded = [];
    use SoftDeletes;
}
