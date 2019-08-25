<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $table="articulo";
    public $timestamps = false;

    public function getImgPreviewAttribute($value){
        return 'storage/novedades/'.$value;
    }

    public function autor(){
        return $this->belongsTo("App\Usuario", "id_autor" );
    }

}
