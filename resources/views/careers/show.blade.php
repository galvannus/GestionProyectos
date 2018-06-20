@extends('layouts.app')
@section('content')

<div class="float-right" style="font-size:2em; color:blue;">
    <a href="/carreras/form"><span class="fas fa-plus"></span></a>
</div>

<div class="row mt-2">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de la carrera</th>
            </tr>
        </thead>
        @forelse($careers as $career)
            <tbody>
                <tr>
                    <th scope="row">{{$career->id}}</th>
                    <td>{{$career->career_name}}</td>
                </tr>
            </tbody>
        @empty
            <p>No hay carreras.</p>
        @endforelse
    </table>
</div>
@if(count($careers))
    <div class="d-flex flex-column">
        <div class="mt-2 mx-auto">
            {{$careers->links('pagination::bootstrap-4')}}
        </div>
    </div>
    
@endif

@endsection