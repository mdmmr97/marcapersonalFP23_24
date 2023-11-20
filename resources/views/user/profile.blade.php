@extends('dopetrope.master')

@section('content')
    <div>
        Esta es la vista del {{$usuario['nombre']}}
        &nbsp;{{$usuario['apellidos']}}
    </div>
@stop
