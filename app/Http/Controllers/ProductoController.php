<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->get();
        // ↓ DE ESTA MANERA PODEMOS PASAR LAS VARIABLES A LA VISTA, USANDO EL MODELO TAMBIEN COMO ESTA ARRIBA Y COLOCANDOLO EN EL ARRAY DEL RETORNO MAS ABAJO
        $tproductos = TipoProducto::latest()->get();

        $fil = ['Orden 1-100','Orden 100-1','Tipo','Nombre A-Z','Nombre Z-A','Cantidad +','Cantidad -'];

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.mostrar_productos', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'productos' =>$productos,
            'tproductos' =>$tproductos,
            'ord' => 0,
            'fil' => $fil
        ]);
    }

    public function filtro(Request $request)
    {
        
        $fil = ['Orden 1-100','Orden 100-1','Tipo','Nombre A-Z','Nombre Z-A','Cantidad +','Cantidad -'];
        $ord = $request->filtro;
        $tproductos = TipoProducto::latest()->get();

        if ($ord == 'Orden 1-100')
        {
            $productos = Producto::orderBy('id', 'ASC')->get();

        }
        if ($ord == 'Orden 100-1')
        {
            $productos = Producto::orderBy('id', 'DESC')->get();

        }
        if ($ord == 'Tipo')
        {
            $productos = Producto::orderBy('tipo', 'DESC')->get();

        }
        if ($ord == 'Nombre A-Z')
        {
            $productos = Producto::orderBy('nombre', 'ASC')->get();

        }
        if ($ord == 'Nombre Z-A')
        {
            $productos = Producto::orderBy('nombre', 'DESC')->get();

        }
        if ($ord == 'Cantidad +')
        {
            $productos = Producto::orderBy('cantidad', 'DESC')->get();

        }
        if ($ord == 'Cantidad -')
        {
            $productos = Producto::orderBy('cantidad', 'ASC')->get();

        }
        

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.mostrar_productos', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'productos' =>$productos,
            'tproductos' =>$tproductos,
            'ord' =>$ord,
            'fil' => $fil
        ]);
        
    }

    public function store(Request $request)
    {       # ↓ aqui creamos o guardamos en la tabla los siguientes datos
        Producto::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
            'image' => $request->file('file')->store('productos','public'),
            'precio' => $request->precio,
            'cantidad' => $request->cantidad
        ]);
            # ↓ esto nos regresa a una pagina anterior
        return back();
    }

    public function destroy(Producto $producto)
    {   
        #↓ esta variable es la misma que pasamos en la ruta de eliminacion
        $producto->delete();
        return back();
    }

    public function cliente()
    {
        $productos = Producto::latest()->get();

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('productos.productos-cliente', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'productos' =>$productos
        ]);
    }

    public function home()
    {
        $productos = Producto::latest()->get();

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('welcome', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'productos' =>$productos
        ]);
    }

    public function clienteVista(Producto $producto)
    {
        return view('productos.productos-vista', compact('producto'));
    }
}
