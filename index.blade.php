@extends('layouts.app') 

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

            @if (session('statuserror'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('statuserror') }}
                            </div>
                @else
                    @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                    @endif
                @endif

                <div class="card-header">Dashboard de administación de tipos</div>
                <div class="card-body">               
                <div class="row">                
                    <a href="{{ route('verasistentedecreartipo') }}" 
                    class="btn btn-success" >Nuevo tipo</a>
                </div>

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">#</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Categorías</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Detalle</th> 
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listaDeTodosLosTipos as $obj)
                            <tr>
                                <th scope="row">{{ $obj->id }}</th>
                                <td><a href="{{ route('vervistaeditar',  $obj->id) }}" class="btn btn-info" >Editar</a></td>
                                <td><a href="{{ route('eliminartipo',  $obj->id) }}" class="btn btn-danger" >Eliminar</a></td>
                                <td><a href="{{ route('admincategorias',  $obj->id) }}" class="btn btn-secondary" >Ver</a></td>
                                <td>{{ $obj->nombre }}</td>
                                <td>{{ $obj->detalle }}</td>                        
                            </tr> 
                        @endforeach
                    </tbody>                    
                    </table>
                    
                    {{ $listaDeTodosLosTipos->links() }}                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection