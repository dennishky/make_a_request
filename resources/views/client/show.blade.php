@extends('templates.template')

@section('content')

    <div class="box">
        <h4>Visualizando dados do Cliente</h4>
        <hr />
        <p>ID: {{ $client->id }}</p>
        <p>Nome: {{ $client->name }}</p>
        <p>Endereço: {{ $client->adress }}</p>
        <p>Cidade: {{ $client->city }}</p>
        <p>Estado: {{ $client->state }}</p>
    </div>
@endsection
