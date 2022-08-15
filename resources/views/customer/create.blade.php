@extends('client.app')

@section('client_main')
<div style="height: 200px">


</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <h3>Fill Up Registration Form</h3>
                <form action="{{ route('customer.store') }}" method="POST"
                    style="background-color: rgb(190, 187, 183); padding:20px">
                    @csrf

                    <div class="form-group">
                        <label for="fname">First Name </label>
                        <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name </label>
                        <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile </label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary" style="text-align: center">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <div style="height: 50px">


    </div>
@endsection
