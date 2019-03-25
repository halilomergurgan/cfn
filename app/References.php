<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class References extends Model
{
    protected $table = 'references';
    use SoftDeletes;
    protected $guarded = [];
}
