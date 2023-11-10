@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="user_profile_info rounded m-5 bg-light p-4">
                    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" name="name"
                                value="{{ $editdata->name }}">
                        </div>
                        <div class="form-group">
                            <label for="useremail">User Email</label>
                            <input type="email" class="form-control" id="useremail" name="email"
                                value="{{ $editdata->email }}">
                        </div>
                        <div class="form-group">
                            <label for="profilepicture">Profile Picture</label>
                            <input type="file" class="form-control" name="profile_photo_path" id="profilepicture">
                        </div>
                        <div class="form-group">
                            <img id="show_profilepicture" style="width: 250px"
                                src="{{ !empty($editdata->profile_photo_path) ? url('upload/user_images/' . $editdata->profile_photo_path) : url('upload/no_image.jpg') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
