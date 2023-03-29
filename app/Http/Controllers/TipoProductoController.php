<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tproductos = TipoProducto::latest()->get();
        $productos = Producto::latest()->get();
        $fil = ['Orden 1-100','Orden 100-1','Nombre A-Z','Nombre Z-A'];

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.tipo_productos', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'tproductos' =>$tproductos,
            'productos' =>$productos,
            'ord' => 0,
            'fil' => $fil
        ]);
    }

    public function filtro(Request $request)
    {
        
        $fil = ['Orden 1-100','Orden 100-1','Nombre A-Z','Nombre Z-A'];
        $ord = $request->filtro;
        $tproductos = TipoProducto::latest()->get();

        if ($ord == 'Orden 1-100')
        {
            $tproductos = TipoProducto::orderBy('id', 'ASC')->get();

        }
        if ($ord == 'Orden 100-1')
        {
            $tproductos = TipoProducto::orderBy('id', 'DESC')->get();

        }
        if ($ord == 'Nombre A-Z')
        {
            $tproductos = TipoProducto::orderBy('nombre', 'ASC')->get();

        }
        if ($ord == 'Nombre Z-A')
        {
            $tproductos = TipoProducto::orderBy('nombre', 'DESC')->get();

        }
        

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.tipo_productos', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'tproductos' =>$tproductos,
            'ord' =>$ord,
            'fil' => $fil
        ]);
        
    }

    public function store(Request $request)
    {       # ↓ aqui creamos o guardamos en la tabla los siguientes datos
        TipoProducto::create([
            'nombre' => $request->nombre,
            'timage' => $request->file('tfile')->store('tproductos','public')
        ]);
            # ↓ esto nos regresa a una pagina anterior
        return back();
    }

    public function destroy(TipoProducto $tproducto)
    {   
        #↓ esta variable es la misma que pasamos en la ruta de eliminacion
        
        $tproducto->delete();
        return back();
    }
    
    #CLIENTE

    public function tipo()
    {
        $tproductos = TipoProducto::latest()->get();

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.productos-tipo', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'tproductos' =>$tproductos
        ]);
    }

    public function tipoVista(TipoProducto $tproducto)
    {

        $productos = Producto::latest()->get();

        return view('productos.productos-cliente', [
            'productos' =>$productos,
            'tproducto' =>$tproducto
        ]);
    }
}
