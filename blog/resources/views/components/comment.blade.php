<div class="comment-text row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-hidden">
        <div class="profile">
            <img class="img-responsive" src="https://i.pravatar.cc/160?u={{$comment->author->id}}" alt="#">
        </div>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-hidden">
        <h5>{{ $comment->author->name }}</h5>
        <p><span class="c_date">{{ $comment->created_at->diffForHumans() }}</span></p>
        <p class="msg">{{ $comment->content }}
        </p>
    </div>
</div>
