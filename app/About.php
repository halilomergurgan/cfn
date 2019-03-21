<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    protected $table = 'abouts';
    protected $guarded = [];

    public function getDescriptionENForDatatableAttribute(){
        return Str::limit($this->description_en, 100);
    }
}
