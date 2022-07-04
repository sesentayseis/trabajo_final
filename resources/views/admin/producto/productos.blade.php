@extends('adminlte::page')
@section('title', 'Admin')
@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    <a class=" btn btn-success" href="/admin/producto/create" style="margin-bottom:20px ">Nuevo</a>
    <table id="example" class="table table-dark table-striped" >
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr class="tr">
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categorias->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td><a class="btn btn-warning" href="/admin/producto/{{$producto->_id}}/editar">Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        Eliminar
                    </button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-bg-dark" style="color: black" id="exampleModalLongTitle">Eliminar Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: black">¿Estas seguro de querer eliminar este producto?</p>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    <a href="/admin/producto/{{$producto->_id}}/delete" type="button" class="btn btn-danger">Eliminar</a>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@stop



