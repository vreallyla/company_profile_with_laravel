<div class="welcome-welcome-slide bg-img bg-gradient-overlay2 jarallax"
     style="background-image: url({{asset($img)}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Welcome Text -->
                <div class="welcome-text text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">{{$title}}</h2>
                    <p data-animation="fadeInUp" data-delay="300ms">{{$slot}}</p>
                    <div class="welcome-btn-group">
                        <a href="{{$urlPrimary}}" class="btn dento-btn mx-2" data-animation="fadeInUp"
                           data-delay="500ms">{{$btnPrimary}}</a>
                        <a href="{{$urlSecondary}}" class="btn dento-btn mx-2 active" data-animation="fadeInUp"
                           data-delay="700ms">{{$btnSecondary}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
