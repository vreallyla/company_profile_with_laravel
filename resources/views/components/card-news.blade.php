<div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50">
    <!-- Blog Thumbnail -->
    <div class="blog-thumbnail">
        <a href="{{$url}}">
            <img src="{{$img}}" alt="">
        </a>
    </div>
    <!-- Blog Content -->
    <div class="blog-content">
        <a href="{{$url}}" class="post-title">{{$title}}</a>
        <p>{{$slot}}</p>
        <div class="post-meta">
            <a href="#"><i class="icon_clock_alt"></i> {{$date}}</a>
            <a href="#"><i class="icon_chat_alt"></i>
                <span class="disqus-comment-count" data-disqus-identifier="{{$id}}">0 Comment</span>
            </a>
        </div>
    </div>
</div>
