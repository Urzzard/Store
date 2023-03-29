<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'subtotal',
        'cantidad'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function compraItems()
    {
        return $this->hasMany(CompraItem::class);
    }

}
