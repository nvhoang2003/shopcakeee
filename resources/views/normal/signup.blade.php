@extends('master.clientmasterpage')

@section('main')
    <main>
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
{{--    <div class="container d-flex flex-column" >--}}
{{--        <div class="row vh-100">--}}
{{--            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">--}}
{{--                <div class="d-table-cell align-middle">--}}
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
                                    <form
                                        action="{{route('cus.store')}}"
                                        method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label label for="cusname" class="form-label" >Cus Name </label>
                                            <input class="au-input au-input--full" type="text" class="form-control form-control-lg"
                                                   id = "cusname" name="cusname"
                                                   placeholder="cusname"
                                                   value="{{old('cusname')}}">
                                        </div>
                                        <div class="form-group">
                                            <label label for="dob" class="form-label" >DOB </label>
                                            <input class="au-input au-input--full" type="date" id="dob" class="form-control form-control-lg" name="dob"
                                                   placeholder="dob" value="{{old('dob')}}"
                                            >
                                        </div>
                                        @php
                                            $cusid =old('gender')?? $cus->gender?? null;
                                        @endphp
                                        <div class="form-group">
                                            <label label for="gender" class="form-label" >Gender </label>
                                            <select name="gender" class="form-control" id="gender" required>
                                                <option value="0">Please select a gender </option>
                                                <option value="{{ $cus->cusid}}"
                                                    {{($cusid !=null && $cus->cusid==$cusid)?'selected':''}}
                                                >Male</option>
                                                <option value="{{ $cus->cusid}}"
                                                    {{($cusid !=null && $cus->cusid==$cusid)?'selected':''}}
                                                >Female</option>
                                                <option value="{{ $cus->cusid}}"
                                                    {{($cusid !=null && $cus->cusid==$cusid)?'selected':''}}
                                                >Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label label for="contact" class="form-label" >Contact </label>
                                            <input class="au-input au-input--full" type="number" id="contact" class="form-control form-control-lg" name="contact"
                                                   placeholder="contact" value="{{old('contact')}}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label label for="email" class="form-label" >Email </label>
                                            <input class="au-input au-input--full" type="text" id="email" class="form-control form-control-lg" name="email"
                                                   placeholder="email" value="{{old('email')}}"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label label for="address" class="form-label" >Address </label>
                                            <input class="au-input au-input--full" type="text" id="address" class="form-control form-control-lg" name="address"
                                                   placeholder="address" value="{{old('address')}}"
                                            >
                                        </div>
                                        <div class="text-center mt-3 ">
                                                <button class="au-btn au-btn--block au-btn--green m-b-20"  style=" background-color: #9e9e9e" type="submit">sign up</button>
                                                <button class="au-btn au-btn--block au-btn--green m-b-20" style=" background-color:  #9e9e9e" type="reset">reset</button>
                                        </div>
                                    </form>

                                </div>
                                @include('partial.error')
                            </div>
                        </div>
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    </main>








@endsection




@section('script')
@endsection
