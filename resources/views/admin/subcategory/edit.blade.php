@extends('admin.admin_master')

@section('admin')

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Update Sub Category Table</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update Sub Category</h6>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('subcategory.update', $subcat->id) }}">
                    <div class="modal-body pd-20">
                        @csrf
                        <div class="form-group">
                            <label for="catname">Update Category Name</label>
                            <input id="catname" type="text" class="form-control" name="subcategory_name"
                                value="{{ $subcat->subcategory_name }}" placeholder="Input category here">
                        </div>
                        <div class="form-group">
                            <label for="catname">Category Name</label>
                            <select name="category_id" id="catname" class="form-control">
                                @foreach ($edit_cat as $row)
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Update</button>
                    </div>
                </form>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">

                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

    @endsection
