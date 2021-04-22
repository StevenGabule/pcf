@extends('admin.layouts.app')

@push('css')
    <style>
        td {
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Courses/Programs Management</h1>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6>Table Lists</h6>
                    <table class="table table-sm small" id="course-table">
                        <thead>
                        <tr>
                            <th style="width:3%">#</th>
                            <th>Title</th>
                            <th>Nick Name</th>
                            <th style="width: 40%">Description</th>
                            <th>Type</th>
                            <th>Estimated Time</th>
                            <th>Created At</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                    </table><!-- end of table -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ secure_asset('template/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('template/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ secure_asset('template/js/moment.min.js') }}"></script>
    <script src="{{ secure_asset('template/js/sweet-alert.js') }}"></script>
    <script src="{{ secure_asset('template/js/admin/course.js') }}"></script>
@endpush
