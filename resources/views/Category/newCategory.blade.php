@extends('master.masterpage')

@section('main')
    <div class="container">
        <h1 class="display-4 text-center font-weight_bold">New Event</h1>

        @include('partial.error')

        <form action="{{route('Event.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="eventname" class="font-weight-bold">Eventname</label>
                <input type="text" class="form-control" id="eventname" name="eventname" value="{{old('eventname')?? $event->eventname}}">
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bold">Image</label>
            </div>
            <input type="file" name="image" id="image" class="mb-3"/>

            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <input  type="text" class="form-control" id="description" name="description" value="{{old('description')?? $event->description}}">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('Event.index')}}" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
@endsection
