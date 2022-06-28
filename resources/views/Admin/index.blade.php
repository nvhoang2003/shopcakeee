@extends('master.masterpage')

@section('main')
    @include('partial.message')
    <div class="container text-center font-weight_bold oorange">
        <h1 class="display-4">Admin Index</h1>

        <table class="table table-success table-hover">
            <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username </th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            @foreach($admin as $a)
                <tr>
                    <td>{{$a->username}}</td>
                    <td>{{$a->contact}}</td>
                    <td>{{$a->email}}</td>

                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('Admin.edit', ['username' => $a->username])}}"
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
