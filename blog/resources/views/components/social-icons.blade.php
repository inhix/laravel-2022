<ul class="social-icons pull-left">
    @foreach($icons as $icon)
        <x-social-icon :icon="$icon"/>
    @endforeach
</ul>
