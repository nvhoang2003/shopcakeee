@extends('master.clientmasterpage')

@section('main')
    <main>
    <style>

         .au-input, .au-input--full {
            width: 100%;
            line-height: 43px;
            border: 1px solid #e5e5e5;
            font-size: 14px;
            color: #666;
            padding: 0 17px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .form-control {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
    </style>
    {{--<link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">--}}


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
                        <img src="{{asset('/storage/images/logo/'.'logocakeshop.jpg')}}" alt="" height="200" width="200" class="img-fluid rounded-circle">
                    </div>
                    @include('partial.error')
                    <form
                        action="{{route('Client.store')}}"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <label label for="cusname" class="form-label" >Full Name </label>
                            <input class="au-input au-input--full" type="text" class="form-control form-control-lg"
                                   placeholder="Please enter your name" id = "cusname" name="cusname" value="{{old('cusname')}}">
                        </div>
                        <div class="form-group">
                            <label label for="dob" class="form-label" >Date Of Birth </label>
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
                            <input class="au-input au-input--full" type="number" id="contact" class="form-control form-control-lg" name="contact" placeholder="Please enter your phone number" value="{{old('contact')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="email" class="form-label" >Email </label>
                            <input class="au-input au-input--full" type="text" id="email" class="form-control form-control-lg" name="email" placeholder="Please enter your email address" value="{{old('email')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="address" class="form-label" >Address </label>
                            <input class="au-input au-input--full" type="text" id="address" class="form-control form-control-lg" name="address" placeholder="Please enter your home address" value="{{old('address')}}"
                            >
                        </div>
                        <div class="text-center mt-3 ">
                            <button class="btn btn-block btn-secondary m-b-20"  type="submit">Sign-Up</button>
                            <button class="btn btn-block btn-secondary m-b-20"  type="reset">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </main>








@endsection




@section('script')
@endsection
