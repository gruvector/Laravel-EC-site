@extends('admin.admin_master')

@section('admin')
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>All Post</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">All Post List
                <a href="{{ route('add.post') }}" class="btn btn-sm btn-info" style="float: right;">Add Post</a>
            </h6>


            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Post Title English</th>
                            <th class="wd-15p">Post Title Hindi</th>
                            <th class="wd-15p">Post Category English</th>
                            <th class="wd-15p">Post Category Hindi</th>
                            <th class="wd-15p">Post Details English</th>
                            <th class="wd-15p">Post Details Hindi</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $row)
                            <tr>
                                <td>{{ $row->post_title_en }}</td>
                                <td>{{ $row->post_title_in }}</td>
                                <td>{{ $row->postcategory->category_name_en }}</td>
                                <td>{{ $row->postcategory->category_name_in }}</td>
                                <td>{!! $row->details_en !!}</td>
                                <td>{!! $row->details_in !!}</td>
                                <td><img src="{{ URL::to($row->post_image) }}" width="115px" height="115px"></td>
                                <td>
                                    <a href="{{ URL::to('/admin/edit/post/' . $row->id) }} "
                                        class="btn btn-sm btn-info" title="edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ URL::to('/admin/view/post/' . $row->id) }}"
                                        class="btn btn-sm btn-warning" title="show"><i class="fa fa-eye"></i></a>

                                    <a href="{{ URL::to('/admin/delete/post/' . $row->id) }}"
                                        class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
@endsection
