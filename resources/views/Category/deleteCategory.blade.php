@extends('master.masterpage')

@section('main')
    <div class="container">
        <h1 class="display-4 text-center font-weight_bold">Are you sure! You want to delete Event?</h1>
        <dl class="row">
            <dt class="col-sm-3">Eventid</dt>
            <dd class="col-sm-9">{{ $event->eventid }}</dd>

            <dt class="col-sm-3">EventName</dt>
            <dd class="col-sm-9">{{ $event->eventname }}</dd>

            <dt class="col-sm-3">image</dt>
            <dd class="col-sm-9"><img src="{{asset("/storage/images/Category/".$event->image)}}" alt="" height="60" width="90"></dd>

            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{$event->description }}</dd>

        </dl>

        <form action="{{route('Event.destroy', ['eventid' =>$event->eventid])}}" method="post">
            @csrf
            <input type="hidden" name="eventid" value="{{$event->eventid}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('Event.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
