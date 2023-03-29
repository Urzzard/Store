<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::latest()->get();

        $fil = ['Orden 1-100','Orden 100-1','Tipo','Nombre A-Z','Nombre Z-A'];

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('usuarios.mostrar_usuarios', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'usuarios' =>$usuarios,
            'ord' => 0,
            'fil' => $fil
        ]);
    }

    public function filtro(Request $request)
    {
        
        $fil = ['Orden 1-100','Orden 100-1','Tipo','Nombre A-Z','Nombre Z-A'];
        $ord = $request->filtro;

        if ($ord == 'Orden 1-100')
        {
            $usuarios = User::orderBy('id', 'ASC')->get();

        }
        if ($ord == 'Orden 100-1')
        {
            $usuarios = User::orderBy('id', 'DESC')->get();

        }
        if ($ord == 'Tipo')
        {
            $usuarios = User::orderBy('tipo', 'ASC')->get();

        }
        if ($ord == 'Nombre A-Z')
        {
            $usuarios = User::orderBy('name', 'ASC')->get();

        }
        if ($ord == 'Nombre Z-A')
        {
            $usuarios = User::orderBy('name', 'DESC')->get();

        }

        #para ordenar la lista podemos usar orderBy('aqui va la columne del orden que quieres')

        return view('usuarios.mostrar_usuarios', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'usuarios' =>$usuarios,
            'ord' =>$ord,
            'fil' => $fil
        ]);
        
    }

    public function store(Request $request)
    {       # ↓ aqui creamos o guardamos en la tabla los siguientes datos
        User::create([
            'tipo' => $request->tipo,
            'name' => $request->name,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password) 
        ]);
            # ↓ esto nos regresa a una pagina anterior
        return back();
    }

    public function destroy(User $usuario)
    {   
        #↓ esta variable es la misma que pasamos en la ruta de eliminacion
        $usuario->delete();
        return back();
    }

    public function perfil()
    {
        $usuarios = User::latest()->get();

        return view('usuarios.perfil-cliente', [
            #↓ esta wea se puede pasar al blade como variable y recorrer en un foreach
            'usuarios' =>$usuarios
        ]);
    }
}
