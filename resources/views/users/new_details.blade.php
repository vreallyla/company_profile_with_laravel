@extends('layouts.public')
@section('title',env('APP_NAME')."'s news")
@section('main')
    <!-- ***** Breadcrumb Area Start ***** -->
    @component('components.breadcrumb')
        @slot('img',asset('img/bg-img/3.jpg'))
        @slot('quote','Found Some Information From Us')
        @slot('thirdLink',true)
        @slot('namePage2','Details')

        <a href="{{route('news')}}">
            News & Events
        </a>
    @endcomponent
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- *****Blog Area Start ***** -->
    <section class="dento-blog-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-100">
                    <!-- Blog Details Area -->
                    <div class="blog-details-area">
                        <img src="{{asset($article->img)}}" alt="">

                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="post-meta">
                            <a href="#"><i class="icon_clock_alt"></i> {{\Illuminate\Support\Carbon::parse($article->created_at)->isoFormat('MMMM Do YYYY')}}</a>
                            <a href="#disqus_thread"><i class="icon_chat_alt"></i>
                                <span class="disqus-comment-count" data-disqus-identifier="{{$article->id}}">0 Comment</span>
                            </a>
                        </div>
                       {!! $article->desc !!}
                    </div>

                    <!-- Post Share  -->
                    <div class="post-share-area mb-30">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F{{route('news_single',['id'=>$article->id])}}&amp;src=sdkpreparse" target="_blank" class="facebook"><i class="fa fa-facebook"></i> Share</a>
                        <a href="http://twitter.com/share?text=visit {{$article->title}} at &url={{route('news_single',['id'=>$article->id])}}&hashtags={{env('APP_NAME')}},building" target="_blank" class="tweet"><i class="fa fa-twitter"></i> Tweet</a>
                        <a href="https://plus.google.com/share?url={{route('news_single',['id'=>$article->id])}}" class="google-plus"><i class="fa fa-google-plus"></i> Share</a>
                        <a href="http://pinterest.com/pin/create/button/?url={{route('news_single',['id'=>$article->id])}}&media={{$article->img}}&description=visit {{$article->title}}" class="pinterest"><i class="fa fa-pinterest"></i> Share</a>
                    </div>

                    <!-- Comments Area -->
                    <div id="disqus_thread"></div>
                    <script>

                        var disqus_config = function () {
                        this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = '{{$article->id}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://company-profiles.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>

                <!-- Dento Sidebar Area -->
                <div class="col-12 col-lg-4">
                    <div class="dento-sidebar">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area search-widget">
                            <form action="#" method="post">
                                <input type="search" name="search" class="form-control" placeholder="Search ...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area catagories-widget">
                            <h5 class="widget-title">Categories</h5>

                            <!-- catagories list -->
                            <ul class="catagories-list">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('news',['state'=>true,'category'=>$category->id])}}">{{$category->name}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area news-widget">
                            <h5 class="widget-title">Recent News</h5>

                            <!-- Single News Area -->
                            @foreach($rands as $rand)
                                @component('components.card-news-2')
                                    @slot('img', $rand->img)
                                    @slot('date', \Illuminate\Support\Carbon::parse($rand->created_at)->isoFormat('MMMM Do YYYY'))
                                    {{$rand->title}}
                                @endcomponent
                            @endforeach

                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area adds-widget">
                            <a href="#"><img class="w-100" src="./img/bg-img/adds.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *****Blog Area End ***** -->
@endsection

@push('js')
    <script id="dsq-count-scr" src="//company-profiles.disqus.com/count.js" async></script>
    <script>
        $(function () {
            $('.search-widget form').on('submit', function (e) {
                e.preventDefault();
                window.location.href = "{{route('news')}}?q=" + $(this).children('[type="search"]').val() + '&state=1';
            });
        });
    </script>
@endpush
