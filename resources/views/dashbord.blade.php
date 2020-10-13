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
                    <ul class='list-group'>
                        <li class='list-group-item'><a href="#">All Users</a></li>
                        <li class='list-group-item'><a href="#">Add new Users</a></li>
                        <li class='list-group-item'><a href="#">Add new Role</a></li>
                        <li class='list-group-item'><a href="#">Settings</a></li>
                        <li class='list-group-item'><a href="#">SEO</a></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
