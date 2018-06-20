@extends('layouts.app')
@section('content')

<div class="row">
    <form action="/projects/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            {{csrf_field()}}
            <label for="project" class="col-md-4 form-control-label">Nombre del proyecto</label>
            <input type="text" name="project" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Qué estás pensando?">
            @if($errors->has('project'))
                @foreach ($errors->get('project') as  $error)
                    <div class="form-control-feedback @if($errors->has('project')) invalid-feedback @endif"> {{$error}} </div>
                @endforeach
            @endif
            <label for="objetivo" class="col-md-4 form-control-label">Objetivo general</label>
            <input type="text" name="objetivo" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Objetivo general">
            @if($errors->has('objetivo'))
                @foreach ($errors->get('objetivo') as  $error)
                    <div class="form-control-feedback @if($errors->has('objetivo')) invalid-feedback @endif"> {{$error}} </div>
                @endforeach
            @endif
            <label for="descripcion" class="col-md-4 form-control-label">Descipción</label>
            <input type="text" name="descipcion" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Descripción">
            
            <label for="especifico" class="col-md-4 form-control-label">Objetivos especificos</label>
            <input type="text" name="especifico" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Objetivo especifico">
            
            <label for="justificacion" class="col-md-4 form-control-label">Justificación</label>
            <input type="text" name="justificacion" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Justifición">
            
            <label for="autor" class="col-md-4 form-control-label">Autor</label>
            <input type="text" name="autor" class="form-control @if($errors->has('project')) is-invalid @endif" placeholder="Autor">

            <label for="documents" class="col-md-4 form-control-label">Documento</label>
            <input type="file" name="documents" class="form-control @if($errors->has('project')) is-invalid @endif">

            <label for="car" class="col-md-4 form-control-label">Carrera</label>
            <select id="select" onchange="change()">
                <option></option>
                @foreach($careers as $career)
                    <option value="{{$career->id}}">{{$career->career_name}}</option>
                @endforeach
            </select>

            <div class="form-group mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Crear
                    </button>
                </div>
            </div>
            <input type="text" name="career" id="carrera" style="visibility:hidden">
            
        </div>
    </form>
</div>
<script>
    function change(){
        let valActual = document.getElementById("select").value.toString();
        document.getElementById("carrera").value = valActual;
    }
</script>
@endsection