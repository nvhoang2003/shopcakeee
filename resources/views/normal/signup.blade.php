@extends('master.clientmasterpage')

@section('main')
    <main>
        <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
        <div class="text-center mt-4">'
            <h1 class="h2">Welcome to Sign Up</h1>
            <p class="lead">
                Please fill out the information form below
            </p>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="m-sm-4">
                    <div class="text-center">
                        <img src="{{asset('/storage/images/logo/'.'logocakeshop.png')}}" alt="" height="200" width="200" class="img-fluid rounded-circle">
                    </div>
                    <form
                        action="{{route('Client.store')}}"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <label label for="cusname" class="form-label" >Cus Name </label>
                            <input class="au-input au-input--full" type="text" class="form-control form-control-lg"
                                   id = "cusname" name="cusname" value="{{old('cusname')}}">
                        </div>
                        <div class="form-group">
                            <label label for="dob" class="form-label" >DOB </label>
                            <input class="au-input au-input--full" type="date" id="dob" class="form-control form-control-lg" name="dob" value="{{old('dob')}}"
                            >
                        </div>
                        @php
                            $gender = old('gender')?? $cus->gender ?? null;
                        @endphp
                        <div class="form-group">
                            <label for="gender"> Gender </label><br>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Please Enter Your Gender</option>
                                <option value="male"
                                    {{($gender != null && $gender == "male") ? 'selected' : ''}}
                                >Male</option>
                                <option value="female"
                                    {{($gender != null && $gender == "female") ? 'selected' : ''}}
                                >Female</option>
                                <option value="other"
                                    {{($gender != null && $gender == "other") ? 'selected' : ''}}
                                >Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label label for="contact" class="form-label" >Contact </label>
                            <input class="au-input au-input--full" type="number" id="contact" class="form-control form-control-lg" name="contact" placeholder="contact" value="{{old('contact')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="email" class="form-label" >Email </label>
                            <input class="au-input au-input--full" type="text" id="email" class="form-control form-control-lg" name="email" placeholder="email" value="{{old('email')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="address" class="form-label" >Address </label>
                            <input class="au-input au-input--full" type="text" id="address" class="form-control form-control-lg" name="address" placeholder="address" value="{{old('address')}}"
                            >
                        </div>
                        <div class="text-center mt-3 ">
                            <button class="au-btn au-btn--block au-btn--green m-b-20"  style=" background-color: #222e3c" type="submit">sign up</button>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" style=" background-color:  #2b3947" type="reset">reset</button>
                        </div>
                    </form>

                </div>
                @include('partial.error')
            </div>
        </div>
    </main>








@endsection




@section('script')
@endsection
