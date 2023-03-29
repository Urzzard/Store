@extends('layouts.app')

            @section('content')
            <div class="col-sm-7 mx-auto mt-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="/">INICIO</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a class="h4 text-info" href="contacto">CONTACTO</a>
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </nav>
            </div>

            <div class="container">
                
                <div class="col-8 text-center my-5 mx-auto border-bottom border-3 border-info py-3">
                    <h1 class="fw-bold">ENCUENTRANOS</h1>
                </div>
                <div class="row justify-content-center py-4 text-center">
                <!--ESTO ES UN POCO TEDIOSO DE ENTENDER PERO FUNCIONA MASOMENOS ASI:
                    DESDE XXL osea, desde 1400px EN ADELANTE, LA COLUMNA TOMA ESE TAMAÑO
                    DESDE XL osea, desde 1400px a 1200px LA COLUMNA TOMA ESE TAMAÑO-->
                <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-12">
                    <div>
                        <h4 class="fw-bold">UBICACIÓN</h4>
                        <div class="row justify-content-center my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-geo-alt col-2 text-info mx-0 my-3" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <p class="col-xl-6 my-auto">Av. Lejos de tu casa #555</p>
                        </div>
                    </div>

                    <div class="my-5">
                        <h4 class="fw-bold">NUMEROS DE CONTACTO</h4>
                        <div class="row justify-content-center my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone-fill col-2 text-info mx-0 my-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                            <p class="col-xl-3 my-auto">954622077</p>
                        </div>
                    </div>

                    <div class="my-5">
                        <h4 class="fw-bold">CORREO ELECTRONICO</h4>
                        <div class="row justify-content-center my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope col-2 text-info mx-0 my-3" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                              </svg>
                            <p class="col-xl-6 my-auto">nomeacuerdomicorreo@gmail.com</p>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 text-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d715.0993376717829!2d-76.23968349939491!3d-9.929510922890142!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1664991666590!5m2!1ses-419!2spe" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
                            
            </div>

            @endsection