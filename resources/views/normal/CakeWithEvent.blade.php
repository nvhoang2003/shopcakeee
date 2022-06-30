@extends('master.clientmasterpage')

@section('main')

    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">Cake with Event : </h1>
        <table class="table">
            <tbody>
            <tr>
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
{{--                    @php--}}
{{--                        if($c->cakeid %3 ==1){--}}
{{--                        echo '<tr>';--}}
{{--                        }--}}
{{--                    @endphp--}}

                    <td>
                        <p>{{$c->cakename}}</p>
                        <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="90" width="120" data-toggle="tooltip" data-html="true" title="<image width='250px' height='250px' src='{{asset("/storage/images/Cake/".$c->image)}}' />">
                        <p>{{$c->price}}</p>
                        <div class="row">
{{--                            <a type="button" class="btn btn-warning btn-sm" href="{{route('Cake.show',['cakeid'=>$c->cakeid])}}"> Show </a>--}}
                            <a type="button" class="btn btn-success btn-sm" href="{{route('View.Category')}}">Back to Event</a>
                        </div>
                    </td>
                    @php
                        if($c->cakeid %3 ==0){
                        echo '</tr>';
                        }
                    @endphp
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>


@endsection




@section('script')
@endsection

