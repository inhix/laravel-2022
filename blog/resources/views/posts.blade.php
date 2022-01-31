<!doctype html>

<title>My Blog</title>

@forelse($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{$post->slug}}">
                {!! $post->title !!}
            </a>
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->excerpt !!}
        </div>
    </article>
@empty
    <h1>
        Nothing to Show
    </h1>
@endforelse
