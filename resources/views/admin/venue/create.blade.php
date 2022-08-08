@extends('admin.dashboard.app')

@section('main')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Venue</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST" action="{{ route('venue.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Venue Name"
                            required>
                        <label for="floatingName">Venue Name</label>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="number" class="form-control" name="price" placeholder="Venue Price" required>
                        <label for="floatingName">Venue Price</label>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="discount" name="discount" placeholder="Discount">
                        <label for="floatingName">Discount</label>
                        @error('discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input class="form-control" placeholder="Address" id="address" name="address">
                        <label for="floatingTextarea">Address</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="division" name="division" aria-label="State" required>
                            <option value="">Select One</option>
                            @foreach ($division as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Select Division</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="zone_id" id="zone" aria-label="State" required>
                            <option value="all">Select One</option>
                        </select>
                        <label for="floatingSelect">Select Zone</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea name="description" class="form-control" id="description" placeholder="Description" style="height: 100px"></textarea>
                            <label for="floatingCity">Description</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="image" required>
                        <label for="floatingSelect">Venue Image</label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
@endsection

@section('ajax')
    <script>
        $(document).ready(function() {

            $('#division').on('change', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: '{{ route('getDivsionsZoneList') }}',
                    data: {
                        id: $(this).val()
                    },
                    success: function(result) {
                        console.log(result);
                        $('#zone').html(result);
                    }
                });
            });
        });
    </script>
@endsection
