@extends('admin.dashboard.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Venue') }}</div>

                    @if (session()->has('message'))
                        <div style="color:green; float:right">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <form method="POST" action="{{ route('venue.update', $venue->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $venue->name}}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="Division"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Zone') }}</label>
                                <div class="col-md-6">
                                    <select name="zone_id" id="zone_id" class="form-control" required>
                                        <option value="">Select One</option>
                                        @foreach ($zone as $r)
                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        value="{{ $venue->price }}" required autocomplete="price" autofocus>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row mb-3">
                                <label for="discount"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Discount') }}</label>

                                <div class="col-md-6">
                                    <input id="discount" type="number"
                                        class="form-control @error('discount') is-invalid @enderror" name="discount"
                                        value="{{ $venue->discount }}" autocomplete="discount" autofocus>

                                    @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="address" >{{ $venue->address }}</textarea>
                                </div>

                            </div>


                            <div class="row mb-3">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="description">{{ $venue->description }}</textarea>
                                </div>

                            </div>


                            <div class="row mb-3">
                                {{-- <img width="auto" height="100"
                                src="{{ asset('storage/images/' .$venue->image) }}" alt="No Image"> --}}
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Venue Image') }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="image" required> 

                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
