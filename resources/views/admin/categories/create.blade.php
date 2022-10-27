@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row links">
        <div class="col-md-3">
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Voltar</a>
        </div>

    </div>
    <div class="row justify-content-center">
        <h3>
            Nova categoria
        </h3>
       <form action="{{ route('categories.store') }}" method="POST">
              @csrf

            @include('components.forms.inputs.text', ['name' => 'name', 'label' => 'Nome', 'required' => 'true'])
            @include('components.forms.inputs.color', ['name' => 'text_color', 'label' => 'Cor do texto', 'required' => 'true'])
            @include('components.forms.inputs.color', ['name' => 'background_color', 'label' => 'Cor do fundo', 'required' => 'true'])
            <div class="buttons">
                @include('components.forms.buttons.submit', ['label' => 'Salvar'])
            </div>

       </form>
    </div>
</div>
@endsection
