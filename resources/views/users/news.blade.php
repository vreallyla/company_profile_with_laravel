@extends('layouts.public')
@section('title',env('APP_NAME')."'s news")
@section('main')
    <!-- ***** Breadcrumb Area Start ***** -->
    @component('components.breadcrumb')
        @slot('img',asset('img/bg-img/3.jpg'))
        @slot('quote','Found Some Information From Us')
        @slot('thirdLink',false)

        News & Events
    @endcomponent
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- *****Blog Area Start ***** -->
    <section class="dento-blog-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Item -->
                    @if(count($articles)>0)
                        @foreach($articles as $article)
                            @component('components.card-news')
                                @slot('url',route('news_single',['id'=>$article->id]))
                                @slot('img',$article->img)
                                @slot('id',$article->id)
                                @slot('title',$article->title)
                                @slot('date',\Carbon\Carbon::parse($article->created_at))
                                @slot('countComment',0)
                                {{substr(strip_tags($article->desc),0,191)}} {{strlen($article->desc>191)?'':' .....'}}
                            @endcomponent
                        @endforeach
                    @else
                        <h3>Data not found</h3>
                @endif

                <!-- Pagination -->
                    <nav class="dento-pagination mb-100">
                        {{ $articles->links() }}
                    </nav>
                </div>

                <!-- Dento Sidebar Area -->
                <div class="col-12 col-lg-4">
                    <div class="dento-sidebar">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area search-widget">
                            <form action="#" method="post">
                                <input type="search" name="search" class="form-control" placeholder="Search ..."
                                    {{isset($_GET['q'])?'value='.$_GET['q']:''}}>
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
                                        <a href="{{route('news',['state'=>true,'cat'=>$category->id])}}{{isset($_GET['q'])?'&q='.$_GET['q']:''}}">
                                            {{$category->name}}
                                        </a>
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
            let objChange = $('.search-widget').find('i');
            let objInput = $('.search-widget').find('input');

            $('.search-widget form').on('submit', function (e) {
                e.preventDefault();
                    let category = '{{isset($_GET['cat'])?$_GET['cat']:''}}';
                    window.location.href = "{{route('news')}}?q=" + $(this).children('[type="search"]').val() +
                        (category ? '&cat=' + category : '') + '&state=1';

            });

        });
    </script>
@endpush
