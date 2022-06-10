@extends('adminlte::page')

@section('title', "Detalhes do plano {{ $plan->name }}")

@section('content_header')
    <h1>Detalhes do plano <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <ul>
                <li><b>Nome:</b> {{ $plan->name }}</li>
                <li><b>URL:</b> {{ $plan->url }}</li>
                <li><b>Preço:</b> R$ {{ number_format($plan->price, 2, ',', '.') }}</li>
                <li><b>Descrição:</b> {{ $plan->description }}</li>
            </ul>
        </div>
        <div class="card-footer">
        </div>
    </div>
@stop
