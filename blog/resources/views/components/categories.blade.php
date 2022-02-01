<div class="blog-sidebar">
    <a href="/blog/?{{ http_build_query(request()->except('category', 'page')) }}"><h4 class="heading">All Categories</h4></a>
    <div class="category-menu">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a style="color: black;
                {{ request('category') === $category->slug ? 'font-weight: bold' : '' }}
                        "
                       href="/blog/?category={{ $category->slug }} & {{ http_build_query(request()->except('category', 'page')) }}">{{ ucwords($category->name) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
