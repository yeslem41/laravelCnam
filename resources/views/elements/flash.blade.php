@if ($errors->any())
                <div class="alert alert-danger directLTR alerts container col-md-4 mt-2" >
                     @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                     @endforeach
                 </div>
@endif 

@if (session('success'))
            <div class="alert alert-success alerts container col-md-4 mt-2">
                {{session('success')}}
            </div>
        @endif