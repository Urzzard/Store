<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function agregarItem(Item $item)
    {
        $existe = $this->items->firstWhere('producto_id', $item->producto_id);

        if($existe)
        {
            $existe->cantidad++;
            $existe->subtotal = $existe->cantidad * $existe->producto->precio;
            $existe->save();
        }
        else
        {
            $item->subtotal = $item->cantidad * $item->producto->precio;
            $item->carrito()->associate($this);
            $this->items()->save($item);
        }
    }

    public function content()
    {
        return $this->items();
    }
}
