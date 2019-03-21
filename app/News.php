<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';
    use SoftDeletes;
    protected $guarded = [];
    protected $appends = ['description_en_for_datatable'];

    public function getPhotoPathAttribute($value){
        return Storage::url($value);
    }

    public function getDescriptionENForDatatableAttribute(){
        return Str::limit($this->description_en, 100);
    }
}
