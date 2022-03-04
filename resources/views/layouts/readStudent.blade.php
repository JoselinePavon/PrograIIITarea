@extends('layouts.index')

@section('title', 'Read')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h3 class="text-center mb-5"> Estudiantes Inscritos</h3>

            <!-- Boton de registro -->
            <a class="btn btn-outline-success mb-3" href="{{url('/Student/Create')}}"><i class="fas fa-plus-square"></i> Registrar Estudiante</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead class="bg-info">
                <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Carrera</td>
                    <td>Semestre</td>
                    <td>Carne</td>
                </tr>
                </thead>

                <tbody>
                @foreach($studets as $student)
                    <tr>
                        <td> {{ $student ->  nombre }} </td>
                        <td> {{ $student ->  apellido }} </td>
                        <td> {{ $student ->  correo }} </td>
                        <td> {{ $student ->  carrera }} </td>
                        <td> {{ $student ->  semestre }} </td>
                        <td> {{ $student ->  carne }} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
