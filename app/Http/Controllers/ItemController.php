<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Item;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\CompraItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function store(Request $request, Producto $producto)
    {   
        $carro = Carrito::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);

            $item = new Item([
                'producto_id' => $producto->id,
                'cantidad' => $request->cantidad,
                'subtotal' => $producto->precio*$request->cantidad
            ]);

            $carro->items()->save($item);

        $carro->save();

        return redirect()->route('carrito.show');
    }

    public function actualizarItem($id, Request $request)
    {
        $items = Item::find($id);
        $items->cantidad = $request->cantidad;
        $items->subtotal = $items->producto->precio * $items->cantidad;
        $items->save();

        return redirect()->back();
    }

    public function borrarItem($id)
    {
        $items = Item::find($id);
        $items->delete();

        return redirect()->back();
    }

    public function itemsCarrito()
    {
        $carrito = Carrito::where('user_id', Auth::user()->id)->get();
        $item = Item::whereDoesntHave('compraItems')->get();
        $compra = CompraItem::latest()->get();

        return view('productos.carrito', [
            'carrito' => $carrito,
            'item' => $item,
            'compra' => $compra
        ]);
    }
}
