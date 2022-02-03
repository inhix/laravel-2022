<div class="blog-sidebar">
    <h4 class="heading">Popular News</h4>
    <div href="/posts/{{$popularPost->slug}}" class="category-menu">
        <span><img src="/images/profile-img2.png" alt="/posts/{{$popularPost->slug}}"></span>
        <span href="/posts/{{$popularPost->slug}}">
            <p href="/posts/{{$popularPost->slug}}">
                <strong>{{ $popularPost->title }}</strong>
            </p>
            <p class="date" href="/posts/{{$popularPost->slug}}">{{ $popularPost->created_at->diffForHumans() }}</p>
        </span>
    </div>
</div>
