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
                <h1 class="h3 mb-0 text-gray-800">School Activities And Events Management</h1>
                <a href="" class="btn btn-primary btn-sm">Add New Event</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6>Table Lists</h6>
                    <table class="table table-sm small" id="event-table">
                        <thead>
                        <tr>
                            <th style="width:3%">#</th>
                            <th style="width:5%">Photo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Start On</th>
                            <th>Added Date</th>
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
    <script src="{{ secure_asset('template/js/admin/events.js') }}"></script>
@endpush
