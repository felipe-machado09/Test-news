@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row links">
        <div class="col-md-3">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Novo Post</a>
        </div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Slug</td>
                    <td>Categorias</td>
                    <td>Criado em</td>
                    <td>Atualizado em</td>
                    <td>Acões</td>
                </tr>
            </thead>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td> @each('components.category.item', $post->category, 'category', 'components.category.no-item') </td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <ul class="action-buttons">
                            <li>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                            </li>
                            <li>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </li>
                        </ul>

                    </td>
                </tr>
            @empty
                    <p>Nenhum Post encontrada</p>

            @endforelse
        </table>
    </div>
</div>
@endsection
