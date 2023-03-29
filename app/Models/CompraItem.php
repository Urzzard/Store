<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'compra_id',
        'item_id',
        'cantidad',
        'subtotal'
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
