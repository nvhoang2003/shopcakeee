@extends('master.clientmasterpage')

@section('main')
    @php
        $cake->price = number_format($cake->price, 0, ',', '.');
        $cake->price .= "VND";
        if ($cake->expiry == 1){
            $cake->expiry.= " day";
        }else{
            $cake->expiry .= " days";
        }
        $n =0;
    @endphp
    <div class="row mb-5 mt-2 bg-light">
        <div class="offset-1 col-3 ml-5">
            <img src="{{asset("/storage/images/Cake/".$cake->image)}}" alt="" height="350" width="350" >
        </div>
        <div class="ml-5 col-4">
            <p class="font-weight-bold">{{$cake->cakename}}</p>
            <p>Price: {{$cake->price}}</p>
            <p>Expiry: {{$cake->expiry}}</p>
            <p>Flavor: {{$cake->flavor}}</p>
            <p>Size: {{$cake->size}}</p>
            <a href="{{asset("/storage/images/Cake/".$cake->image)}}" class="text-light" target="_blank"> <button class="btn btn-block btn-success col-3 mb-1"><i class="fas fa-expand-arrows-alt"></i></button></a>
            <a href="{{route('Client.Order')}}" class="text-light"><button class="btn btn-block btn-dark col-3"><i class="fas fa-shopping-cart"></i></button></a>
        </div>
        <div class="offset-1 col-2">
            <p class="font-weight-bold bg-warning">May You Like</p>
            @foreach($cake1 as $c)
                @if($c->cakeid == $cake->cakeid)
                    @php
                        continue
                    @endphp
                @endif
                @if($n>=2)
                    @php
                        break
                    @endphp
                @endif
                <p>{{$c->cakename}}</p>
                <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="90" width="120" data-toggle="tooltip" data-html="true" title="<image width='250px' height='250px' src='{{asset("/storage/images/Cake/".$c->image)}}' />">
                <div class="row">
                    <a type="button" class="btn btn-warning btn-sm" href="{{route('Client.Cakedetail',['cakeid'=>$c->cakeid])}}"> Show </a>
                </div>
                @php
                    $n++;
                @endphp
            @endforeach
        </div>
    </div>
@endsection
