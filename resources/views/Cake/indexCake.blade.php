@extends('master.masterpage')


@section('main')

    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">Cake Index</h1>
        <table class="table">
            <tbody>
            @if(count($cake) != 0)
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
                    <td class="col-3 pl-5">
                    <div class="ml-5">
                            <p>{{$c->cakename}}</p>
                            <img src="{{asset("/storage/images/Cake/".$c->image)}}" alt="" height="90" width="120" data-toggle="tooltip" data-html="true" title="<image width='250px' height='250px' src='{{asset("/storage/images/Cake/".$c->image)}}' />">
                            <p>{{$c->price}}</p>
                            <div class="row">
                                <a type="button" class="btn btn-success btn-sm col-2 m-1" href="{{route('Cake.edit',['cakeid'=>$c->cakeid])}}"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger btn-sm col-2 m-1" href="{{route('Cake.confirm',['cakeid'=>$c->cakeid])}}"><i class="fas fa-trash"></i></a>
                                <a type="button" class="btn btn-secondary btn-sm col-2 m-1" href="{{route('Cake.show',['cakeid'=>$c->cakeid])}}"><i class="fas fa-eye"></i></a>
                            </div>

                    </div>
                    </td>

                    @php
                        if($n%3==2){
                        echo '</tr>';
                        }
                        $n+=1;
                    @endphp
                @endforeach
                    @endif
            </tbody>
        </table>
    </div>

@endsection
@section('script')
@endsection
