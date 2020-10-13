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
                   <form method="POST" action="{{ route('roll.store') }}">
                    @csrf
                        <div class="form-group">
                            <label for="name">Roll Name:</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="access">Access:</label><br>

                            <input type="checkbox" value="all_user" name="access[]" id="all_user"><label for="all_user">All user</label>
                            <input type="checkbox" value="add_user" name="access[]" id="add_user"><label for="add_user">Add User</label>
                            <input type="checkbox" value="add_roll" name="access[]" id="add_roll"><label for="add_roll">Add roll</label>
                            <input type="checkbox" value="setting" name="access[]" id="setting"><label for="setting">Setting</label>
                            <input type="checkbox" value="seo" name="access[]" id="seo"><label for="seo">SEO</label>

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
