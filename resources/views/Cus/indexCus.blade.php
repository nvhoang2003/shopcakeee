@extends('master.masterpage')

@section('main')
    @include('partial.message')
    <div class="container">
        <h1 class="display-4 text-center font-weight_bold">Customer Index</h1>

        <table class="table table-danger table-hover">
            <thead>
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Cusname </th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cus as $c)
                <tr>
                    <td>{{$c->cusname}}</td>
                    <td>{{$c->dob}}</td>
                    <td>{{$c->gender}}</td>
                    <td>{{$c->contact}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->address}}</td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('Cus.edit', ['cusid' => $c->cusid])}}"
                        >Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
