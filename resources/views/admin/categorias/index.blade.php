@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')
    <a href="/admin/categorias/create" type="button" class="btn btn-success">Añadir Categoria</a>
    <hr>
    <table id="example" class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categorias)
            <tr>
                <td>{{$categorias->nombre}}</td>
                <td>{{$categorias->descripcion}}</td>
                <td><a href="categorias/{{$categorias->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        Eliminar
                    </button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bg-dark" style="color: black" id="exampleModalLongTitle">Eliminar Categoria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: black">¿Estas seguro de querer eliminar esta categoria?</p>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    <a href="categorias/delete/{{$categorias->_id}}" type="button" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
