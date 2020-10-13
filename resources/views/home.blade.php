@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}
                <a class="btn btn-sm btn-warning float-right shadow hover" href="{{ route('showAll') }}">show all User</a>
                <a class="btn btn-sm btn-success float-right shadow hover" href="{{ route('user.dasboard') }}">Dasbord</a>
                </div>

                <div class="card-body">

                        <img src="media\photo\users\{{ Auth::user() -> photo }}" class="rounded-circle shadow border border-warning" alt="...">

                        <h3>{{ Auth::user() -> name }}</h3>
                        <table class='table'>
                            <tr>
                                <td>Name:</td>
                                <td>{{ Auth::user() -> name }} </td>
                            </tr>
                            <tr>
                                <td>user name:</td>
                                <td> {{ Auth::user() -> uname }}</td>
                            </tr>
                            <tr>
                                <td>email:</td>
                                <td> {{ Auth::user() -> email }}</td>
                            </tr>

                            <tr>
                                <td>phone:</td>
                                <td> {{ Auth::user() -> cell }}</td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
