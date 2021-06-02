@extends('templates.template')

@section('content')

    <section class="border rounded col-xl-10 box border-secondary">

        <h2 class="text-md-center box">Clientes</h2>

        <div class="container col-xl-10 box">

            <table class="table table-striped table">
                <tr>
                    <th class="text-md-center">ID</th>
                    <th class="text-md-center">Nome</th>
                    <th class="text-md-center">Celular</th>
                    <th class="text-md-center">Endereço</th>
                    <th class="text-md-center">Cidade</th>
                    <th class="text-md-center">Estado</th>

                    <th class="text-md-center" colspan="6">Comandos</th>
                </tr>
                @if (isset($clients))
                    @foreach ($clients as $client)
                        <tr>
                            <td class="text-md-center">{{ $client->id }}</td>
                            <td class="text-md-center">{{ $client->name }}</td>
                            <td class="text-md-center">{{ $client->cell }}</td>
                            <td class="text-md-center">{{ $client->adress }}</td>
                            <td class="text-md-center">{{ $client->city }}</td>
                            <td class="text-md-center">{{ $client->state }}</td>

                            <td class="text-md-center"><a href="{{ route('client.show', $client->id) }}"><button
                                        class="btn btn-success">Visualizar</button></a></td>
                            <td class="text-md-center"><a href="{{ route('client.edit', $client->id) }}"><button
                                        class="btn btn-primary">Editar</button></a></td>
                            <td class="text-md-center">
                                <form method="POST" action="{{ route('client.destroy', $client->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('Deseja Realmente Excluir?');">Excluir</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                @else
                    <tr>
                        <td colspan="6">NÃO EXISTEM DADOS PARA SEREM EXIBIDOS!</td>
                    </tr>
                @endif

            </table>

            <div class="text-md-center box">
                <a href="{{ route('client.create') }}"><button class="btn btn-outline-info">Novo Cliente</button></a>
                <a class="btn btn-outline-secondary" href=""><span aria-hidden="true">&larr;</span>Voltar</a>
            </div>

        </div>

    </section>
@endsection
