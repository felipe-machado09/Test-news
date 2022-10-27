@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <form action=" {{ route('home') }} " method="GET">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="h2">
                            Pesquisar Titulo e categoria
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Pesquisar">
                        </div>
                        <div class="col-md-4">
                            @include('components.forms.buttons.submit', ['label' => 'Pesquisar'])
                        </div>
                    </div>


                </div>
                <hr>
            </form>

    </div>
    <div class="row justify-content-center">
        @forelse ($posts as $post)
            @include('components.card-post', ['post' => $post])
        @empty
                <p>Nenhum post encontrado</p>

        @endforelse

    </div>
</div>
@endsection
