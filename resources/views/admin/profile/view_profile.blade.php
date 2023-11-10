@extends('admin.admin_master')

@section('admin')
    <div class="row">
        <div class="col-lg-4">
            <div class="admin_profile_info m-5">
                <div class="card">
                    <img class="card-img-top"
                        src="{{ !empty($adminData->profile_photo_path) ? url('upload/admin_images/' . $adminData->profile_photo_path) : url('upload/no_image.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-title">Admin Name: {{ $adminData->name }}</h5>
                        <p class="card-text">Admin Email: {{ $adminData->email }}</p>
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
