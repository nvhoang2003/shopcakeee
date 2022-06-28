@extends('master.masterpage')


@section('main')
    @include('partial.message')
    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">Cake Index</h1>
        <table class="table">
            <tbody>
            <tr>
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
                        if($c->cakeid %3 ==1){
                        echo '<tr>';
                        }
                    @endphp

                    <td>
                        <p>{{$c->cakename}}</p>
                        <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="100" width="150" class="mt-1">
                        <p>{{$c->price}}</p>
                        <div class="row">
                            <a type="button" class="btn btn-success btn-sm" href="{{route('Cake.edit',['cakeid'=>$c->cakeid])}}">Update</a>
                            <a type="button" class="btn btn-danger btn-sm" href="{{route('Cake.confirm',['cakeid'=>$c->cakeid])}}">Delete</a>
                            <a type="button" class="btn btn-warning btn-sm" href="{{route('Cake.show',['cakeid'=>$c->cakeid])}}"> Show </a>
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
