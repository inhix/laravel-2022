@forelse($posts as $post)
    <x-news-post :post="$post"/>
@empty
    <span>
        <h1>No posts yet. Check back later!</h1>
    </span>
@endforelse
