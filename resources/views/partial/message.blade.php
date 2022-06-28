@if (\Illuminate\Support\Facades\Session::get('msg') != null)
    <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msg')}}
    </div>
@endif

@if (\Illuminate\Support\Facades\Session::get('msg') == null and \Illuminate\Support\Facades\Session::get('msgf') == null)
    <div class="alert alert-warning alert-dismissible fade show col-8" role="alert">
        <p>The message will displayed here</p>
    </div>
@endif

@if (\Illuminate\Support\Facades\Session::get('msgf') != null)
    <div class="alert alert-danger alert-dismissible fade show col-8" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msgf')}}
    </div>
@endif

