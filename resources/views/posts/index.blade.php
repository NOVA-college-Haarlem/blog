

@foreach ($posts as $post)
    <div class="card">
        <div class="card-title">
            {{$post->title}}
        </div>
        <div class="card-summary">
            {{$post->summary}}
        </div>
        <div class="card-content">
            {{$post->content}}
        </div>
    </div>
@endforeach