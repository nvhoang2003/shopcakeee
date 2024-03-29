@extends('master.clientmasterpage')

@section('main')
    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">List of all cake </h1>
        <table class="table table-borderless">
            <tbody>
            @if(count($cake1) != 0)
                @php
                    $n=0;
                @endphp
                @foreach($cake1 as $c )
                    @php
                        $c->price = number_format($c->price, 0, ',', '.');
                        $c->price .= "VND";
                        if ($c->expiry == 1){
                            $c->expiry.= " day";
                        }else{
                            $c->expiry .= " days";
                        }
                    @endphp
                    @php
                        if($n %3 ==0){
                        echo '<tr>';
                        }
                    @endphp

                    <td class="col-3 pl-5">
                        <div class="ml-5">
                            <p>{{$c->cakename}}</p>
                            <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="90" width="120" data-toggle="tooltip" data-html="true" title="<image width='250px' height='200px' src='{{asset("/storage/images/Cake/".$c->image)}}' />">
                            <p>{{$c->price}}</p>
                            <div class="row">
                                <a type="button" class="btn btn-warning btn-sm ml-4" href="{{route('Client.Cakedetail',['cakeid'=>$c->cakeid])}}"><i class="fas fa-eye"></i></a>
                                <a type="button" class="ml-1 btn btn-secondary btn-sm"  href="{{route('Client.Order')}}"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>

                    </td>
                    @php
                        if($n %3 ==2){
                        echo '</tr>';
                        }
                        $n +=1;
                    @endphp
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection




@section('script')
@endsection
