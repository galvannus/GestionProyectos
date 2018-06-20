@extends('layouts.app')
@section('content')

    <h1>{{ $career->career_name }}</h1>

    <div class="float-right" style="font-size:2em; color:blue;">
        <a href="/projects/form"><span class="fas fa-plus"></span></a>
    </div>
    <div class="row mt-2">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del proyecto</th>
                    <th scope="col">Objetivo general</th>
                    <th scope="col">Objetivos especificos</th>
                    <th scope="col">Justificación</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Carrera</th>
                </tr>
            </thead>
            @foreach($career->projects as $project)
                <tbody>
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->project_name}}</td>
                        <td>{{$project->objetive}}</td>
                        <td>{{$project->specific_objetive}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->justification}}</td>
                        <td>{{$project->author}}</td>
                        <td>{{$project->career->career_name}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection