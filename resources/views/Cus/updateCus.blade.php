@extends('master.masterpage')

@section('main')
    <h2>Change Admin</h2>

    @include('partial.error')
    <form action="{{route('Cus.update', ['cusid' =>  $cus->cusid])}}" method="post">
        @csrf
        <input type="hidden" name="cusid" value="{{old('cusid')?? $cus->cusid}}">
        <div class="form-group">
            <label for="cusname" class="font-weight-bold">Cusname</label>
            <input type="text"  class="form-control" id="cusname" name="cusname" value="{{old('cusname')?? $cus->cusname}}">
        </div>

        <div class="form-group">
            <label for="dob" class="font-weight-bold">DOB</label>
            @php
                $dob=explode('-',$cus->dob);
                $dob=$dob[1].'-'.$dob[2].'-'.$dob[0];
            @endphp
            <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $cus->dob}}">
        </div>

        <div class="form-group">
            <label for="gender" class="font-weight-bold">gender</label>
            <input type="text"  class="form-control" id="gender" name="gender" value="{{old('gender')?? $cus->gender}}">
        </div>

        <div class="form-group">
            <label for="contact" class="font-weight-bold">contact</label>
            <input type="number" class="form-control" id="contact" name="contact" min="0" value="{{old('contact')?? $cus->contact}}">
        </div>

        <div class="form-group">
            <label for="email" class="font-weight-bold">Email</label>
            <input type="text" class="form-control" id="email" name="email"  value="{{old('email')?? $cus->email}}">
        </div>

        <div class="form-group">
            <label for="address" class="font-weight-bold">Address</label>
            <input type="text" class="form-control" id="address" name="address"  value="{{old('address')?? $cus->address}}">
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
@endsection
