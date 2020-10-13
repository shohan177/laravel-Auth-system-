@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All users') }}
                <a class="btn btn-sm btn-warning float-right shadow hover" href="{{ route('user.create') }}">Add roll</a>

                </div>

                    <table class="tavle table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Roll Name</th>
                                <th>Access</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user_data as $data)
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $data -> name }}</td>
                                    <td>{{ $data -> rolls -> name }}</td>
                                    <td>
                                        @foreach (json_decode($data -> rolls -> access) as $acc)
                                           | {{ $acc }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
