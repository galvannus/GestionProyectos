@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-5 offset-md-2 mt-3">
            <form action="/carreras/create" method="post">
                <div class="form-goup">
                    {{csrf_field()}}
                    <label for="carrera" class="col-md-4 form-control-label">Nombre de la carrera</label>
                    <input type="text" name="career" class="form-control @if($errors->has('career')) is-invalid @endif" placeholder="Qué estás pensando?">
                    @if($errors->has('career'))
                        @foreach ($errors->get('career') as  $error)
                            <div class="form-control-feedback @if($errors->has('career')) invalid-feedback @endif"> {{$error}} </div>
                        @endforeach
                    @endif
                    <div class="form-group mt-3">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection