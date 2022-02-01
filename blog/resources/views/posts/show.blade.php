<x-layout>
    <section id="content" class="content main-heading single-blog">
        <div class="row">
            <div class="container">
                <div class="col-md-9">
                    <div class="feature-post">
                        <div class="feature-img">
                            <img src="images/img-03_002.jpg" class="img-responsive" alt="#"/>
                        </div>
                        <div class="feature-cont">
                            <div class="post-people">
                                <div class="left-profile">
                                    <div class="post-info">
                                        <img src="images/profile-img.png" alt="#"/>
                                        <span>
                                    <a href="/blog/?author={{ $post->author->username }}">
                                        <h4>by {{ $post->author->name }}</h4>
                                        </a>
                                    <h5>{{ $post->created_at->diffForHumans() }}</h5>
                                 </span>
                                    </div>
                                    <span class="share"></span>
                                </div>
                            </div>
                            <div class="post-heading">
                                <h3>{!! $post->title !!}</h3>
                                <p>
                                    {!! $post->content !!}
                                </p>
                            </div>
                        </div>
                        @include('comments')
                        @include('components.comment-form')
                    </div>
                    <div class="feature-content">
                    </div>
                </div>
                <div class="col-md-3">
                    @include('__sidebar')
                </div>
            </div>
        </div>
    </section>
</x-layout>
