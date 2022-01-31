<!doctype html>

<title>{!! $post->title !!}</title>

    <article>
        <h1>
                {!! $post->title !!}
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->content !!}
        </div>
    </article>
<a href="/">Go Back</a>
