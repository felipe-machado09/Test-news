
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
            Atualizar categoria
        </h3>
       <form action="{{ route('categories.update', $category->id) }}" method="POST">
              @method('PUT')
              @csrf

            @include('components.forms.inputs.text', ['name' => 'name', 'label' => 'Nome', 'required' => 'true', 'value' => $category->name])
            @include('components.forms.inputs.color', ['name' => 'text_color', 'label' => 'Cor do texto', 'required' => 'true', 'value' => $category->text_color])
            @include('components.forms.inputs.color', ['name' => 'background_color', 'label' => 'Cor do fundo', 'required' => 'true', 'value' => $category->background_color])
            <div class="buttons">
                @include('components.forms.buttons.submit', ['label' => 'Salvar'])
            </div>

       </form>
    </div>
</div>
@endsection
