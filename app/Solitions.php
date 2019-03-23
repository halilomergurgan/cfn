<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Solitions extends Model
{
    protected $table = 'solitions';
    use SoftDeletes;
    protected $guarded = [];
    protected $appends = ['description_en_for_datatable'];

    public function getPhotoPathAttribute($value){
        return Storage::url($value);
    }

    public function getDescriptionENForDatatableAttribute(){
        return Str::limit($this->description_en, 100);
    }

    public  function getMenuName(){
        return $this->belongsTo('App\Menus','menu_id');
    }

    public function getTitleLangNameAttribute(){

        if(\Illuminate\Support\Facades\App::getLocale() == 'tr')
        {
            return $this->title_tr;
        }else{
            return $this->title_eng;
        }
    }

    public function getDescriptionLangNameAttribute(){

        if(\Illuminate\Support\Facades\App::getLocale() == 'tr')
        {
            return $this->description_tr;
        }else{
            return $this->description_en;
        }
    }
}
