@extends('master.clientmasterpage')

@section('main')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}">
        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('img/shop/details/product-big-1.jpg')}}">

        </div>
        <div class="hero__item set-bg" data-setbg="{{asset('img/class-video.jpg')}}">
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
<div class="mt-5 mb-5 p-5" style="background-color: #ff6a00">
    <p class="display-4 font-weight-bold text-light text-center">History Of CakeShop</p>
    <p class="display-5 font-weight-bold text-light" > My family has been making cakes for three generations. My grandfather left his hometown to go to the city to settle down. With his efforts, he built a cake shop. After that, he passed on the baking experience to my father. After many failures, the cake shop has finally become a big force in the baking world. However, with the development of technology, we are forced to change to adapt to the times. Thus the DcakeShop website was born.</p>
</div>
@endsection




@section('script')
@endsection
