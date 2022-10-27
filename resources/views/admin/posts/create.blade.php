@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row links">
        <div class="col-md-3">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Voltar</a>
        </div>

    </div>
    <div class="row justify-content-center">
        <h3>
            Novo Post
        </h3>
       <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            @include('components.forms.inputs.text', ['name' => 'title', 'label' => 'Titulo', 'required' => 'true'])
            @include('components.forms.inputs.select', ['label' => 'Categorias', 'name' => 'categories[]', 'options' => $categories])
            @include('components.forms.inputs.textarea', ['name' => 'content', 'label' => 'Conteúdo', 'required' => 'true'])
            <div class="buttons">
                @include('components.forms.buttons.submit', ['label' => 'Salvar'])
            </div>

       </form>
    </div>
</div>
@endsection
