<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url({{asset($img)}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h2 class="title" style="font-size: 20px">{{$quote}}</h2>
            </div>
        </div>
    </div>
</div>
<div class="breadcumb--con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('index')}}">
                                <i class="fa fa-home"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item {{$thirdLink?' ':'active'}}" {{$thirdLink?' ':'aria-current="page"'}} >{{$slot}}</li>

                    @if($thirdLink)
                            <li class="breadcrumb-item active" aria-current="page">{{$namePage2}}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
