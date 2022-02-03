@if($posts->count() > 0)
    @if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {{$posts->links()}}
    @endif
    @foreach($posts as $post)
        <x-news-post :post="$post"/>
    @endforeach
    @if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {{$posts->links()}}
    @else
        <a class="btn" href="{{ route('posts.index') }}">More news</a>
    @endif
@else
    <span>
        <h1>No posts yet. Check back later!</h1>
    </span>
@endif
