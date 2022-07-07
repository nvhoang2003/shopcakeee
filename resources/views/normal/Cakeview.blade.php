@extends('master.clientmasterpage')

@section('main')

    <table class="table">
        <tbody>
        @php
            $n=0;
        @endphp
        @foreach($cake as $c )
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

            <td>
                <div>
                    <p>{{$c->cakename}}</p>
                    <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="90" width="120" data-toggle="tooltip" data-html="true" title="<image width='250px' height='250px' src='{{asset("/storage/images/Cake/".$c->image)}}' />">
                    <p>{{$c->price}}</p>
                    <div class="row">
                        <a type="button" class="btn btn-warning btn-sm" href="{{route('Client.Cakedetail',['cakeid'=>$c->cakeid])}}"> Show </a>
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

        </tbody>
    </table>


@endsection




@section('script')
@endsection