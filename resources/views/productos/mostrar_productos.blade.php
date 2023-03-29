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
                            <h3><b>Agregar Productos</b></h3>
                        </div>

                        <form action="{{ route('productos.agregar') }}" method="POST" enctype="multipart/form-data">
                            <div class="row py-2 px-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="col"><span>Nombre del producto: </span></div>
                                        <div class="col-10"><input type="text" name="nombre" placeholder="Nombre" class="form-control" required></div>
                                    </div>
                                    <div class="col">
                                        <div class="col"><span>Categoria del producto: </span></div>
                                        <div class="col-8">
                                            <select class="form-select" aria-label="Default select example" name="tipo" required id="tipo">
                                                
                                                <option selected>Tipo de Producto</option>
                                                @foreach($tproductos as $tproducto)
                                                    <option value="{{$tproducto->id}}">{{$tproducto->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--SI TENEMOS PENSADO AGREGAR UN NUEVO CAMPO DENTRO DE USUARIOS Y QUEREMOS GUARDAR, NECESITAMOS AGREGARLO TAMBIEN DENTRO DE SU MODELO-->
                                
                                <div class="row py-4">
                                    <div class=""><span>Descripcion del producto: </span></div>
                                    <div class=""><textarea name="descripcion" cols="30" rows="5" placeholder="Descripcion..." class="form-control" required></textarea></div>
                                </div>

                                <div class="row py-2">
                                    <div class="col">
                                        <div class="col"><span>Imagen del producto: </span></div>
                                        <div class="col-10"><input type="file" name="file" class="form-control" required></div>
                                    </div>
                                    <div class="col">
                                        <div class="col"><span>Precio del producto: </span></div>
                                        <div class="col-10"><input type="number" name="precio" placeholder="Precio" class="form-control" step="0.01" required></div>
                                    </div>
                                    <div class="col">
                                        <div class="col"><span>Cantidad en unidades del producto: </span></div>
                                        <div class="col-10"><input type="number" name="cantidad" placeholder="Cantidad" class="form-control" required></div>
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
                        <h3><b>Ver y Editar Productos</b></h3>
                    </div>

                    <form action="{{ route('productos.filtro') }}" method="POST">
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
                                <th>NOMBRE</th>
                                <th>TIPO</th>
                                <th>PRECIO</th>
                                <th>CANTIDAD</th>
                                @if (Auth::user()->tipo == 1)
                                    <th>&nbsp</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->id}}</td>
                                <td><a href="">{{$producto->nombre}}</a></td>
                                <td>{{$producto->tipode->nombre}}</td>
                                <td>S/. {{number_format($producto->precio,2)}}</td>
                                <td>{{$producto->cantidad}}</td>
                                
                                <!--Si se quiere modificar el estado de nuestra base de datos, siempre debemos usar formularios-->
                                
                                    @if (Auth::user()->tipo == 1)
                                        <td><!--dentro de action ira la ruta para modificar, sea actualizar o modificar-->
                                            <form action="{{ route('productos.eliminar', $producto) }}" method="POST">
                                                @method('DELETE')
                                                @csrf<!--este es un token de seguridad-->
                                                <input type="submit" value="ELIMINAR" class="btn btn-sm btn-danger" onClick="return confirm('¿Desea eliminar este producto?')">
                                            </form>
                                        </td>
                                    @endif
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endsection
