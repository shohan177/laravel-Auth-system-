@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}
                <a class="btn btn-sm btn-warning float-right shadow hover" href="{{ route('home') }}">Profile</a>

                </div>

                <div class="card-body">
                   <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Roll Name:</label>
                            <select class="form-control" name="roll" id="" >

                                @foreach ($roll_data as $r_data)
                                    <option value="{{ $r_data -> id }}">{{ $r_data -> name }}</option>
                                @endforeach


                            </select>

                        </div>

                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input class="form-control" type="text" name="uname" value="{{ old('uname') }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Email:</label>
                            <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="name">Cell:</label>
                            <input class="form-control" type="text" name="cell" value="{{ old('cell') }}">
                        </div>

                        <div class="form-group">
                            <button  class="btn btn-primary">Add</button>
                        </div>

                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
