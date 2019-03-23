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
