@extends('admin.dashboard.app')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    @if (session()->has('message'))
                        <div style="color:green; float:right">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <h5 class="card-title">Manage Zone</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Division</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zone as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->division->name }}</td>
                                        <td>
                                            <button class="btn btn-primary"><a
                                                    href="{{ route('zone.edit', $item->id) }}"
                                                    style="color: aliceblue">Edit</a></button>

                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('zone.destroy', $item->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Delete</button>

                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
