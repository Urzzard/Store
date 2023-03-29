<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Item;
use Illuminate\Http\Request;
use Auth;

class CarritoController extends Controller
{
    
    public function show()
    {       
        $carro = Carrito::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);

        $items = $carro->items;

        return view('productos.carrito', compact('items'))->with('status', 'Añadido al carrito');
    }
    

    /*
    public function carrito()
    {
        $carrito = Carrito::latest()->get();
        
        return view('productos.carrito',[
            'carrito' => $carrito
        ]);
    }
    */
    
}
