@extends('master.masterpage')

@section('main')
    <div class="row">
        <div class="offset-1 col-5">
            <h1 class="display-6">Are you want to delete that cake ?</h1>
            @php
                $cake->price = number_format($cake->price, 0, ',', '.');
                $cake->price .= "VND";
                if ($cake->expiry == 1){
                    $cake->expiry.= " day";
                }else{
                    $cake->expiry .= " days";
                }
            @endphp

            <dl class="row">
                <dt class="col-sm-3">cakeid</dt>
                <dd class="col-sm-9">{{ $cake->cakeid }}</dd>

                <dt class="col-sm-3">cakename</dt>
                <dd class="col-sm-9">{{ $cake->cakename }}</dd>

                <dt class="col-sm-3">flavor</dt>
                <dd class="col-sm-9">{{ $cake->flavor }}</dd>

                <dt class="col-sm-3">price</dt>
                <dd class="col-sm-9">{{$cake->price }}</dd>

                <dt class="col-sm-3">expiry</dt>
                <dd class="col-sm-9">{{$cake->expiry }}</dd>

                <dt class="col-sm-3">image</dt>
                <dd class="col-sm-9">{{$cake->image }}</dd>

                <dt class="col-sm-3">size</dt>
                <dd class="col-sm-9">{{$cake->size }}</dd>

                <dt class="col-sm-3">eventname</dt>
                <dd class="col-sm-9">{{$event->eventname }}</dd>

            </dl>
        </div>
        <div class="col-6">
            <img src="{{asset("/storage/images/Cake/".$cake->image)}}" alt="" height="250" width="300" class="mt-5">
        </div>
    </div>
    <form action="{{route('Cake.destroy', ['cakeid' =>$cake->cakeid])}}" method="post">
      @csrf
        <div class="ml-5">
            <input type="hidden" name="cakeid" value="{{$cake->cakeid}}">
            <button type="submit" class="btn btn-danger ml-5">Delete</button>
            <a href="{{route('Cake.index')}}" class="btn btn-info">Cancel</a>
        </div>
    </form>

  </div>

@endsection
