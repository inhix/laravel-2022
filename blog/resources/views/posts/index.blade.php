@if($posts->count() > 0)
    @if($posts->count() > 5)
        {{$posts->links()}}
    @endif
    @foreach($posts as $post)
        <x-news-post :post="$post"/>
    @endforeach
    @if($posts->count() > 5)
        {{$posts->links()}}
    @endif
@else
    <span>
        <h1>No posts yet. Check back later!</h1>
    </span>
@endif
