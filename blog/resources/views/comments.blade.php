<div class="comment-section">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>COMMENTS: ({{$post->comments->count()}})</h3>
        @foreach ($post->comments as $comment)
        <x-comment :comment="$comment"/>
        @endforeach
    </div>
</div>
