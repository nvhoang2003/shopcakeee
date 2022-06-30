@extends('master.clientmasterpage')

@section('main')

    <div class="categories">
        <div class="container">
            <div class="row">

                <div class="categories__slider owl-carousel">
                    @foreach($event as $e)
                        <div class="categories__item">
                            <div class="categories__item__icon">
                                <img src="{{asset("/storage/images/Category/".$e->image)}}" alt="" height="120" />
                                <h5>{{$e->eventname}}</h5>
                                <a type="button background-color:red; border-color:blue; color:white" class="btn btn-success btn-sm" href="{{route('Cake.Event',['eventid'=>$e->eventid])}}">Cake with event</a>
                            </div>
                        </div>
                    @endforeach
                    <img src="">
                </div>
            </div>
        </div>
    </div>





@endsection




@section('script')
@endsection
