<div class="search-bar">
    <div id="imaginary_container">
        <form method="GET" action="/posts/">
            <div class="input-group stylish-input-group">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text"
                       class="form-control"
                       name="search"
                       placeholder="Search"
                       value="{{request('search')}}">
                <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
            </div>
        </form>
    </div>
</div>
