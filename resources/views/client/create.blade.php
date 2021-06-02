@extends('templates.template')

@section('content')

    <section class="border rounded col-xl-6 box2 border-secondary">
        <h2 class="text-md-center box">Cadastro de Cliente</h2>

        <div class="col-xl-8">
            <form action="{{ route('client.store') }}" method="POST">
                @csrf
                <label class="box2" for="name">Nome:</label>
                <input type="text" class="form-control box2" placeholder="Nome completo" name="name" required> <br>

                <label class="box2" for="name">Celular:</label>
                <input type="text" class="form-control box2" placeholder="(XX) (XXXXX)-(XXXX)" name="cell" required> <br>

                <label class="box2" for="name">Endereço:</label>
                <input type="text" class="form-control box2" placeholder="Rua: Tocantis, 53, Mundial Golden I" name="adress"
                    required> <br>

                <label class="box2" for="city">Selecione uma cidade:</label>
                <select class="form-control box2" name="city" required>
                    <option value="Jales">Jales</option>
                    <option value="Santa Fé do Sul">Santa Fé do Sul</option>
                    <option value="Rubinéia">Rubinéia</option>
                </select> <br>

                <label class="box2" for="state">Selecione um estado:</label>
                <select class="form-control box2" name="state" required>
                    <option value="SP">SP</option>
                    <option value="MS">MS</option>
                    <option value="RS">RS</option>
                </select> <br>

                {{-- <label class="box2" for="city">Cidade:</label>
                <input type="text" class="form-control box2" placeholder="" name="city" required> <br>

                <label class="box2" for="state">Estado:</label>
                <input type="text" class="form-control box2" placeholder="" name="state" required> <br> --}}

                <div class="text-md-center box">
                    <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    <a class="btn btn-outline-secondary" href="{{ route('client.index') }}"><span
                            aria-hidden="true">&larr;</span>Voltar</a>
                </div>
            </form>
        </div>
        @if (count($errors) > 0)
            {{ dd($errors) }}
        @endif
    </section>
@endsection
