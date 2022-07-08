@extends('master.masterpage')

@section('main')
    <h1 class="display-4 text-center">Change Admin</h1>

    @include('partial.error')
<form action="{{route('Admin.update', ['username' =>  $admin->username])}}" method="post">
    @csrf
    <div class="form-group">
        <label for="username" id="disabledInput" class="font-weight-bold" >Username</label>
        <input type="hidden" name="username" value="{{old('username')?? $admin->username}}">
        <input type="text"  class="form-control" id="disable" name="disable" value="{{old('username')?? $admin->username}}" disabled>
    </div>



    <div class="form-group">
        <label for="number" class="font-weight-bold">Contact</label>
        <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')?? $admin->contact}}">
    </div>

    <div class="form-group">
        <label for="email" class="font-weight-bold">Email</label>
        <input type="text" class="form-control" id="email" name="email" min="0" value="{{old('email')?? $admin->email}}">
    </div>

    <div class="form-group">
        <label for="password" class="font-weight-bold">Old Password</label>
        <input type="password" class="form-control" id="password" name="password" >
    </div>

    <div class="form-group">
        <label for="newpass" class="font-weight-bold">New Password</label>
        <input type="text" class="form-control" id="newpass" name="newpass" value="{{old('newpass') ?? null}}">
    </div>

    <div>
        <input type="submit" value="Submit">
    </div>
</form>
@endsection
