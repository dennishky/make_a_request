@extends('templates.template')

@section('content')

    <section class="border rounded col-xl-10 box2 border-secondary">
        <h2 class="text-md-center box">Editar Cliente</h2>
        <div class="col-xl-6">
            <form action="{{ route('client.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="box2" for="name">Nome: </label>
                <input value="{{ $client->name }}" placeholder="Ex: Computador" class="form-control box2" type="text"
                    name="name" required> <br>

                <label class="box2" for="cell">Celular: </label>
                <input value="{{ $client->cell }}" placeholder="Ex: Computador" class="form-control box2" type="text"
                    name="cell" required> <br>

                <label class="box2" for="adress">Endereço: </label>
                <input value="{{ $client->adress }}" placeholder="Ex: Computador" class="form-control box2" type="text"
                    name="adress" required> <br>

                <label class="box2" for="city">Cidade: </label>
                <select id="city" class="form-control box2" name="city" required> <br>
                    <option value="{{ $client->id ?? '' }}">{{ $client->city ?? '' }}</option>
                    <option value="Santa Fé">Santa Fé</option>
                </select>

                <label class="box2" for="state">Estado: </label>
                <select id="state" class="form-control box2" name="state" required> <br>
                    <option value="{{ $client->id ?? '' }}">{{ $client->state ?? '' }}</option>
                    <option value="SP">SP</option>

                </select>
                {{-- <label class="box2" for="city">Cidade: </label>
                <input value="{{ $client->adress }}" placeholder="Ex: Computador" class="form-control box2" type="text"
                    name="name" required> <br>

                <label class="box2" for="state">Estado: </label>
                <input value="{{ $client->adress }}" placeholder="Ex: Computador" class="form-control box2" type="text"
                    name="name" required> <br> --}}

                <div class="text-md-center box">
                    <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    <a class="btn btn-outline-secondary" href="{{ route('client.index') }}"><span
                            aria-hidden="true">&larr;</span>Voltar</a>

                </div>
            </form>
        </div>
    @endsection
