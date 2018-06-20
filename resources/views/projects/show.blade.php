@extends('layouts.app')
@section('content')
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
                    <th scope="col">Documento</th>
                </tr>
            </thead>
            @forelse($projects as $project)
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
                        <td>
                            <div class="float-right" style="font-size:2em;">
                                <a href="/documents/{{$project->documents}}"><span class="fas fa-file-alt"></span></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @empty
                <p>No hay mensajes destacados.</p>
            @endforelse
        </table>
    </div>
    @if(count($projects))
        <div class="d-flex flex-column">
            <div class="mt-2 mx-auto">
                {{$projects->links('pagination::bootstrap-4')}}
            </div>
        </div>
        
    @endif
    
@endsection