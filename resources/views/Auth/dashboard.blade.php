@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success" id="success-message">
                        You are logged in!
                    </div>       
                @endif    
                <div class="">
                  <h2>Welcome To Dashboard</h2>
                        <h4>{{Auth::user()->name}}</h4>
                    </div>
            </div>
        </div>
    </div>    
</div>
<script>
    // Set a timeout to hide the success message after 5 seconds (5000 milliseconds)
    window.onload = function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // Adjust time (in milliseconds) as needed
        }
    };
</script>
@endsection