<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'timage',
    ];

    public function tipode(){
        return $this->hasOne(Producto::class, "id");
    }

    public function getGetImageAttribute(){

        if($this->timage)
            return url("storage/$this->timage");


    }
}
