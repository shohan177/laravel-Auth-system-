@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('all user') }}

                    <a class="btn btn-sm btn-success float-right shadow hover" href="{{ route('home') }}">profile</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>emain</th>
                                <th>photo</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_user as $data)

                            <tr>
                                <td>{{ $loop -> index +1 }}</td>
                                <td>{{ $data -> name }}</td>
                                <td>{{ $data -> email }}</td>
                                <td><img style="width: 50px; height:50px" src="media\photo\users\{{ $data -> photo }}" alt=""></td>
                                <td>
                                    @if (Auth::user() -> id == $data -> id)
                                        <a href="#" class="btn btn-sm btn-info">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    @endif
                                        <a href="#" class="btn btn-sm btn-warning">View</a>
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
