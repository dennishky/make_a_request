@extends('templates.template')

@section('content')

    <section class="border rounded col-xl-10 box2 border-secondary">

        <h2 class="text-md-center box">Pedido</h2>

        <div class="container col-xl-10 box">

            <table class="table table-striped table-dark">
                <tr>
                    <th class="text-md-center">ID</th>
                    <th class="text-md-center">Data do pedido</th>
                    <th class="text-md-center">Cliente</th>
                    <th class="text-md-center" colspan="3">Comandos</th>
                </tr>
                @if (isset($request))
                    @foreach ($request as $request)
                        @php
                            $client = $client->find($client->id)->request;
                        @endphp
                        <tr>
                            <td class="text-md-center">{{ $request->id }}</td>
                            <td class="text-md-center">{{ $request->date_request }}</td>
                            <td class="text-md-center">{{ $client->name }}</td>
                            <td class="text-md-center"><a href="{{ route('request.show', $class->id) }}"><button
                                        class="btn btn-primary">Visualizar</button></a></td>
                            <td class="text-md-center"><a href="{{ route('request.edit', $class->id) }}"><button
                                        class="btn btn-primary">Editar</button></a></td>
                            <td class="text-md-center">
                                <form method="POST" action="{{ route('request.destroy', $class->id) }}">
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
                <a href="{{ route('request.create') }}"><button class="btn btn-lg btn-success">Novo</button></a>
                <a class="btn btn-outline-secondary" href="{{ URL::previous() }}"><span
                        aria-hidden="true">&larr;</span>Voltar</a>
            </div>

        </div>

    </section>
@endsection
