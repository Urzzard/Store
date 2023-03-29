<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\CompraItem;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Compra;
use App\Models\Item;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function store(Request $request)
    {
        $compra = new Compra();
        $compra->user_id = Auth::user()->id;
        $compra->total = $request->total;
        $compra->fecha = now();
        $compra->save();

        foreach (Carrito::where('user_id', Auth::user()->id)->first()->items as $item)
        {
            $existe = CompraItem::where('item_id', $item->id)->first();
            if(!$existe)
            {    
                $compraItem = new CompraItem();
                $compraItem->compra_id = $compra->id;
                $compraItem->item_id = $item->id;
                $compraItem->cantidad = $item->cantidad;
                $compraItem->subtotal = $item->subtotal;
                $compraItem->save();
            }
        }

        return redirect()->route('compra.crear');
    }

    public function historial()
    {
        $historial = Compra::where('user_id', Auth::user()->id)->get();

        return view('productos.historial_compras', [
            'historial' => $historial
        ]);
    }
}
