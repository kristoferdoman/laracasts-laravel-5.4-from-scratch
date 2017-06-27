<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}"> 
            {{ $post->title }} 
        </a>
    </h2>

    <p class="blog-post-meta">
        {{ $post->created_at->toDayDateTimeString() }}
    </p>

    {{ $post->body }}
</div>