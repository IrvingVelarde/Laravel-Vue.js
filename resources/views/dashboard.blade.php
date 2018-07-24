@extends('app')

@section('content')
    <div id="crud" class="row">
   	<div class="col-xs-6">
		<h1 class="page-header">CRUD Laravel y VUEjs</h1>
	</div>
	   	<div class="col-xs-6">
		<h1 class="page-header">JSON</h1>
	</div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#" class="btn btn-primary"> <span class="fas fa-plus-square" aria-hidden="true"></span> Agregar Categoria</a>
                    <p>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>TAREA</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="keep in keeps">
                                <td>@{{ keep.id  }}</td>
                                <td>@{{ keep.keep }}</td>
                                <td width="10px">
                                    <a href="#" class="btn btn-info"><span class="fas fa-eye" aria-hidden="true"></span> Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="#" class="btn btn-warning"><span class="fas fa-edit" aria-hidden="true"></span> Editar</a>
                                </td>
                                <td width="10px">
                                	<a href="#" class="btn btn-danger" v-on:click.prevent="deleteKeep(keep)"><span class="fas fa-trash" aria-hidden="true"></span> Eliminar</a>
                                </td>
                            </tr>
                        </tbody>   
                    </table>     	
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
			        <pre>
						@{{ $data }}
					</pre>
                </div>
            </div>
        </div>
    </div>
@endsection

