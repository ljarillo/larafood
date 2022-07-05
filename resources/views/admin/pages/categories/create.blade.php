@extends('adminlte::page')

@section('title', 'Cadastrar nova categoria')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categoria</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('categories.create') }}" class="active">Novo</a></li>
    </ol>
    <h1>Cadastrar nova categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" class="form" method="POST">
                @include('admin.pages.categories._partials.form')
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@stop
