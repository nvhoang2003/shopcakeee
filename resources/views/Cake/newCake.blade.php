@extends('master.masterpage')

@section('main')
  <div class="container form_cake" >
    <h1 class="display-4 text-center font-weight_bold">New Cake</h1>

    @include('partial.error')

    <form action="{{route('Cake.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="cakename" class="font-weight-bold">Cakename</label>
        <input type="text" class="form-control" id="cakename" name="cakename" value="{{old('cakename')?? $cake->cakename}}">
      </div>

      <div class="form-group">
        <label for="flavor" class="font-weight-bold">Flavor</label>
        <input type="text" class="form-control" id="flavor" name="flavor" value="{{old('flavor')?? $cake->flavor}}">
      </div>

      <div class="form-group">
        <label for="price" class="font-weight-bold">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')?? $cake->price}}">
      </div>

      <div class="form-group">
        <label for="expiry" class="font-weight-bold">Expiry</label>
        <input type="text" class="form-control" id="expiry" name="expiry" value="{{old('expiry')?? $cake->expiry}}">
      </div>

      <div class="form-group">
        <label for="image" class="font-weight-bold">Image</label>
        <input type="file" id="image" name="image">
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="text" class="form-control" id="size" name="size" value="{{old('size')?? $cake->size}}">
      </div>
      @php
        $cakeid =old('event')?? $cake->event?? null;
      @endphp
      <div class="form-group">
        <label for="event" class="font-weight-bold">Event</label>
        <select name="event" class="form-control" id="event" required>
          <option value="0">Please select a event cake </option>
          @foreach($event as $e)
            <option value="{{ $e->eventid}}"
                    {{($cakeid !=null && $e->eventid==$cakeid)?'selected':''}}
            >{{ $e->eventname }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('Cake.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
