<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRUEBA DE BOOTSTRAP</title>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col col-2 bg-success">
            hola
        </div>
        <div class="col col-8 bg-info">
            hola
        </div>
        <div class="col col-2 bg-warning">
            hola
        </div>
    </div>
    <div>
        <button class="btn btn-primary">
            Boton
        </button>
    </div>
    <div class="alert alert-success">
        ALERTA
    </div>

    <nav class=" navbar bg-info">
        <ol class="breadcrumb my-auto">
            <li class="breadcrumb-item">
                <a class="primary" href="">UNO</a>
            </li>
            <li class="breadcrumb-item">
                <a class="primary" href="">DOS</a>
            </li>
            <li class="breadcrumb-item active">
                TRES
            </li>
        </ol>
    </nav>

    <div class="px-4 text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-tittle">Nuevo</h5>
                        <h6 class="card-subtittle">Otro</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, odio? Ipsum odit officiis libero veritatis omnis aliquam dolor nesciunt. Delectus aliquid voluptate dicta culpa aspernatur aliquam repellendus id dolores numquam.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-tittle">Nuevo</h5>
                        <h6 class="card-subtittle">Otro</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, odio? Ipsum odit officiis libero veritatis omnis aliquam dolor nesciunt. Delectus aliquid voluptate dicta culpa aspernatur aliquam repellendus id dolores numquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4 bg-success">
                UNO
            </div>
            <div class="col-4 bg-success">
                DOS
            </div>
        </div>
    </div>

    <div class="container text-center bg-success">
        <div class="row align-items-start bg-info" style="height: 200px">
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
        </div>
        <div class="row align-items-center bg-warning" style="height: 200px">
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
        </div>
        <div class="row align-items-end" style="height: 200px">
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
          <div class="col">
            One of three columns
          </div>
        </div>
    </div>

    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand" href="">TIENDA</a>
            <button></button>
            <div class="">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">PRODUCTOS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">TORTAS</a></li>
                            <li><a class="dropdown-item" href="">PASTELES</a></li>
                            <li><a class="dropdown-item" href="">OTROS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
</body>
</html>