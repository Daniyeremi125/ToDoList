<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name') }}</title>
  
  <!-- Favicon -->
  <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body>
  <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Tareas</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('tareas/create') }}" class="btn btn-sm btn-primary">Agregar Tarea</a>
        </div>
      </div>
    </div>
    
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombre de la tarea</th>
            <th scope="col">Descripción de la tarea</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <th scope="row">
              {{ $task->name }}
            </th>
            <td>
              {{ $task->description }}
            </td>
            <td>
              <a href="{{ url('tareas/' . $task->id . '/edit') }}" class="btn btn-sm btn-primary">Editar</a>
              <form action="{{ url('tareas/' . $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Navigation -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}"
      onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
      <i class="fas fa-sign-in-alt text-danger"></i> Regresar 
    </a>
    <form action="{{ route('home') }}" method="GET" style="display: none;" id="formLogout">
      @csrf
    </form>
  </li>
</body>

</html>
