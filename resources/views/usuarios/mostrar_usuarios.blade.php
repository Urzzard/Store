            @extends('layouts.app')

            @section('content')
            <div class="col-sm-7 mx-auto mt-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="h4" href="../home">INICIO</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>
            <div class="row">
                <div class="col-sm-7 mx-auto mb-5">

                    <div class="card">

                        <div class="p-4">
                            <h3><b>Agregar Usuarios</b></h3>
                        </div>

                        <form action="{{ route('usuarios.agregar') }}" method="POST">
                            <div class="row py-2 px-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="col"><span>Nombre del Usuario: </span></div>
                                        <div class="col-10"><input type="text" name="name" placeholder="Nombre" class="form-control"></div>
                                    </div>

                                    <div class="col">
                                        <div class="col"><span>Apellido del Usuario: </span></div>
                                        <div class="col-10"><input type="text" name="apellido" placeholder="Apellido" class="form-control"></div>
                                    </div>
                                    <!--SI TENEMOS PENSADO AGREGAR UN NUEVO CAMPO DENTRO DE USUARIOS Y QUEREMOS GUARDAR, NECESITAMOS AGREGARLO TAMBIEN DENTRO DE SU MODELO-->
                                    <div class="col">
                                        <div class="col"><span>Tipo de Usuario: </span></div>
                                        <div class="col-8">
                                            <select class="form-select" aria-label="Default select example" name="tipo">
                                                <option selected>Tipo de Usuario</option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Cliente</option>
                                                <option value="3">Trabajador</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-4">
                                    <div class="col">
                                        <div class="col"><span>Correo electronico: </span></div>
                                        <div class="col-9"><input type="text" name="email" placeholder="E-mail" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="col"><span>Contraseña: </span></div>
                                        <div class="col-6"><input type="password" name="password" placeholder="Contraseña" class="form-control"></div>
                                    </div>
                                </div>

                                <div class="row mx-auto mt-4 mb-3">
                                    @csrf
                                    <!--con button o con input nos sirve sin problemas-->
                                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mt-5 mb-5">
                        <h3><b>Ver y Editar Usuarios</b></h3>
                    </div>

                    <form action="{{ route('usuarios.filtro') }}" method="POST">
                        @csrf
                        <div class="row p-2 mx-auto">
                            <div class="col-sm-11">
                                <select class="form-select" name="filtro" id="">
                                    @foreach($fil as $f)
                                    {
                                        @if ($ord==$fil)
                                        {
                                            <option value="{{$f}}" selected>{{$f}}</option>
                                        }
                                        @else
                                        {
                                            <option value="{{$f}}">{{$f}}</option>
                                        }
                                        @endif
                                    }
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                      </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TIPO</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>EMAIL</th>
                                <th>&nbsp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->rol->nombre}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->apellido}}</td>
                                <td>{{$usuario->email}}</td>
                                <!--Si se quiere modificar el estado de nuestra base de datos, siempre debemos usar formularios-->
                                <td><!--dentro de action ira la ruta para modificar, sea actualizar o modificar-->
                                    <form action="{{ route('usuarios.eliminar', $usuario) }}" method="POST">
                                        @method('DELETE')
                                        @csrf<!--este es un token de seguridad-->
                                        <input type="submit" value="ELIMINAR" class="btn btn-sm btn-danger" onClick="return confirm('¿Desea eliminar este usuario?')">

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endsection

