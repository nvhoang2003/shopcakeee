@extends('master.masterpage')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure! You want to delete Cake?</h1>
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
    <form action="{{route('Cake.destroy', ['cakeid' =>$cake->cakeid])}}" method="post">
      @csrf
      <input type="hidden" name="cakeid" value="{{$cake->cakeid}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('Cake.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>

@endsection
