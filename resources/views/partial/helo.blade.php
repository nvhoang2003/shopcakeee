<div class="text-center font-weight-bold display-4 text-dark">
    <p>Hello  {{\Illuminate\Support\Facades\Session::has('username')?
               \Illuminate\Support\Facades\Session::get('username') : ''}} . Have a nice day </p>
</div>
