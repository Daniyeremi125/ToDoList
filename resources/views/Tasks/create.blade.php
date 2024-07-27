<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    {{config('app.name')}}
  </title>
  
  <!-- Favicon -->
  <link href="{{ asset ('img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">  Nuevas Tareas</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('tareas') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-chevron-left"></i>
                    Regresar</a>
                </div>
              </div>
            </div>
           
        <div class="card-body" >

      
        
            <form action="{{url('tareas')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de la tarea</label>
                    <input type="text" name="name" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" name="description" class="form-control">
                </div>
                    <button type="submit" class="btn btn-sm btn-primary">Crear Tarea</button>
            </form>

          </div>

        </div>

