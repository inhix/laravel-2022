<div class="feature-post small-blog">
    <div class="col-md-5">
        <div class="feature-img">
            <img src="https://picsum.photos/id/{{$post->id}}/525/604" class="img-responsive" alt="#"/>
        </div>
    </div>
    <div class="col-md-7">
        <div class="feature-cont">
            <div class="post-info">
                <img src="{{ $post->author->userpic }}" alt="#"/>
                <span>
                    <a href="/posts/?author={{ $post->author->username }}"><h4>by {{ $post->author->name }}</h4>
                    <h5>Published {{ $post->created_at->diffForHumans() }}</h5>
                    </a>
                </span>
            </div>
            <div class="post-heading">
                <a href="/posts/{{$post->slug}}"><h3>{{ $post->title }}</h3>
                    <p>{!! $post->excerpt !!}</p></a>
                <div class="full">
                    <x-category-label :category="$post->category"/>
                    <a class="btn" href="/posts/{{ $post->slug }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
