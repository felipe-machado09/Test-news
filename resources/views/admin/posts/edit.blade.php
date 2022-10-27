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
            Atualizar Post
        </h3>
       <form action="{{ route('posts.update', $post->id) }}" method="POST">
              @method('PUT')
              @csrf

            @include('components.forms.inputs.text', ['name' => 'title', 'label' => 'Titulo', 'required' => 'true', 'value' => $post->title])
            @include('components.forms.inputs.select', [ 'name' => 'categories[]','label' => 'Categorias',  'options' => $categories, 'value' => $post->categories])
            @include('components.forms.inputs.textarea', ['name' => 'content', 'label' => 'Conteúdo', 'required' => 'true', 'value' => $post->content])

            <div class="buttons">
                @include('components.forms.buttons.submit', ['label' => 'Salvar'])
            </div>

       </form>
    </div>
</div>
@endsection
