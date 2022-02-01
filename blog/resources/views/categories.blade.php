<div class="blog-sidebar">
    <a href="/blog"><h4 class="heading">All Categories</h4></a>
    <div class="category-menu">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a style="color: black;
                {{ request()->is("categories/$category->slug") ? 'font-weight: bold' : '' }}
                            "
                        href="/categories/{{ $category->slug }}">{{ ucwords($category->name) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
