<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    </head>

    <body>
       
        <section class="h-100 gradient-form" style="background-color: #350505;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="{{asset('assets/log.jpg')}}"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Tus tareas te esperan</h4>
                          </div>
          
                          <form action="{{route('login')}}" method="post">
                            @csrf

                            <p>INICIAR SESION</p>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example11">Correo 
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                    <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914"/>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                  </svg>
                                </label>
                              <input type="email" name="email" id="form2Example11" class="form-control"
                                placeholder="Ingresar correo" />
                            </div>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example22">Contraseña</label>
                              <input type="password" name="password" id="form2Example22" class="form-control" /> 
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                              
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">No tienes una cuenta?</p>
                              <a href="{{route('register')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Crear Cuenta</a>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img src="{{asset('assets/regilog.jpg')}}"
                          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
