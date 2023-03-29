<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'image',
        'precio',
        'cantidad'
    ];

    public function tipode(){
        return $this->belongsTo(TipoProducto::class, "tipo");
    }

    public function getGetImageAttribute(){

        if($this->image)
            return url("storage/$this->image");


    }
}
