{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos</title>
</head>
<body>
  
  <h1>Bienvenido a la pagina para crear cursos</h1>

</body>
</html> --}}

{{--  para usar la plantilla de blade, se debe extender de ella, con la directiva @extends('layouts.plantilla')
 --}}
@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
  <h1>Bienvenido a la pagina para crear cursos</h1>
@endsection
