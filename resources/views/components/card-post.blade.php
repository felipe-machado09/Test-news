<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ $post->title }}</div>
        <div class="card-body">
            <p>{{ Helper::limitText($post->content) }}</p>
            <p>@each('components.category.item', $post->category, 'category', 'components.category.no-item')</p>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary">Acessar</a>
        </div>
    </div>
</div>
