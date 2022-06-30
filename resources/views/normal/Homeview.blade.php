@extends('master.clientmasterpage')

@section('main')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Making your life sweeter one bite at a time!</h2>
                            <a href="#" class="primary-btn">Our cakes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <h2>Making your life sweeter one bite at a time!</h2>
                            <a href="#" class="primary-btn">Our cakes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<!-- Hero Section End -->--}}

<!-- Categories Section Begin -->
<div class="categories">
    <div class="container">
        <div class="row">

            <div class="categories__slider owl-carousel">
                @foreach($event as $e)
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <img src="{{asset("/storage/images/Category/".$e->image)}}" alt="" height="120" />
                        <h5>{{$e->eventname}}</h5>
                    </div>
                </div>
                @endforeach
                <img src="">
            </div>
        </div>
    </div>
</div>
{{--<!-- Categories Section End -->--}}

{{--<!-- Product Section Begin -->--}}
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection




@section('script')
@endsection
