@extends('client.app')

@section('client_main')
    <div style="height: 200px">


    </div>
    <div class="container">

        <div class="col-md-12">
            <h3>Login with your Email & Password</h3>
            @if (session()->has('message'))
                <div style="color:rgb(255, 2, 2);">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('customer_login_check') }}" method="POST"
                style="background-color: rgb(190, 187, 183); padding:20px; width:50%">
                @csrf
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="Password">Password </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>

                <button type="submit" class="btn btn-primary" style="text-align: center">Sign In</button>
            </form>

        </div>

    </div>
    <div style="height: 50px">


    </div>
@endsection
