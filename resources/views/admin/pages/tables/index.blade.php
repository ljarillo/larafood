@extends('adminlte::page')

@section('title', 'Mesas')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('tables.index') }}" class="active">Mesas</a></li>
    </ol>

    <h1>Mesas <a href="{{ route('tables.create') }}" class="btn btn-dark"><i class="fa fa-plus-square"></i> Add</a> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('tables.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Busca" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <div class="input-group">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark"><i class="fa fa-filter"></i> Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Identificação</th>
                    <th>Descrição</th>
                    <th class="text-center" style="width: 20%">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tables as $table)
                    <tr>
                        <td>{{ $table->identify }}</td>
                        <td>{{ $table->description }}</td>
                        <td class="text-center">
                            <a href="{{ route('tables.qrcode', $table->identify) }}" class="btn btn-default" target="_blank"><i class="fa fa-qrcode"></i> QrCode</a>
                            <a href="{{ route('tables.show', $table->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                            <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-warning"><i class="fa fa-pen"></i> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $tables->appends($filters)->links() !!}
            @else
                {!! $tables->links() !!}
            @endif

        </div>
    </div>
@stop
