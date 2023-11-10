@extends('admin.admin_master')

@section('admin')
    <div class="row">
        <div class="col-lg-6">
            <div class="admin_profile_info rounded m-5 bg-light p-4">
                <form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="username">Admin Name</label>
                        <input type="text" class="form-control" id="username" name="name" value="{{ $editData->name }}">
                    </div>
                    <div class="form-group">
                        <label for="useremail">Admin Email</label>
                        <input type="email" class="form-control" id="useremail" name="email"
                            value="{{ $editData->email }}">
                    </div>
                    <div class="form-group">
                        <label for="profilepicture">Profile Picture</label>
                        <input type="file" class="form-control" name="profile_photo_path" id="profilepicture">
                    </div>
                    <div class="form-group">
                        <img id="show_profilepicture" style="width: 250px"
                            src="{{ !empty($editData->profile_photo_path) ? url('upload/admin_images/' . $editData->profile_photo_path) : url('upload/no_image.jpg') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
