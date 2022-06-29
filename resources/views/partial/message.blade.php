@if (\Illuminate\Support\Facades\Session::get('msg') != null)
    <div class="alert text-success alert-dismissible fade show col-8 font-weight-bold" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msg')}}
    </div>
@endif

@if (\Illuminate\Support\Facades\Session::get('msg') == null and \Illuminate\Support\Facades\Session::get('msgf') == null)
    <div class="alert text-warning alert-dismissible fade show col-8 font-weight-bold" role="alert">
        <p>The message will displayed here</p>
    </div>
@endif

@if (\Illuminate\Support\Facades\Session::get('msgf') != null)
    <div class="alert text-danger alert-dismissible fade show col-8 font-weight-bold" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msgf')}}
    </div>
@endif

