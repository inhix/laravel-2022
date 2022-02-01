<div class="comment-section">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Leave a comment</h3>
        <div class="form-command row">
            <form action="/posts/{{ $post->slug }}/comments/" method="POST" id="comments_form" class="form-horizontal1">
                @csrf
                <div class="comment-box-field">
                    <div class=" col-sm-12 col-xs-12">
                        <div class="comment-box-full">
                            <textarea
                                id="comments" class="form-control4" placeholder="Comments"
                                name="content" cols="45" rows="3" aria-required="true" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="comment-box-submit">
                            <input id="submit" value="Submit " type="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
