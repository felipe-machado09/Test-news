@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row links">
        <div class="col-md-3">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
        </div>

    </div>
    <div class="row ">
        <table class="table table-striped">
            <thead>
                <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Cor do Texto</td>
                <td>Cor de fundo</td>
                <td>Criado em</td>
                <td>Atualizado em</td>
                <td>Acoes</td>
            </tr>
        </thead>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        <span class="tag" style="background-color: {{$category->background_color}}; color: {{ $category->text_color }}">
                            {{ $category->name }}
                        </span>
                    </td>
                    <td><span style="background-color: {{$category->text_color}}">{{ $category->text_color }}</span></td>
                    <td><span style="background-color: {{$category->background_color}}">{{ $category->background_color }}</span></td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <ul class="action-buttons">
                            <li>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
                            </li>
                            <li>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </li>
                        </ul>
                    </td>

                </tr>
            @empty
                    <p>Nenhuma categoria encontrada</p>

            @endforelse
        </table>
    </div>
</div>
@endsection
