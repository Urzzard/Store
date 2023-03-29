<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'fecha'
    ];

    public function compraitem()
    {
        return $this->hasMany(CompraItem::class);
    }
}