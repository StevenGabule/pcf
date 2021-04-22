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
        <div class="col-md-4 offset-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
                <button onclick="window.history.back()"
                        type="button"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    Back
                </button>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" id="inputName">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputUserType">User Type</label>
                                <select id="inputUserType" name="user_type" class="custom-select">
                                    <option value="0" {{ (int)old('user_type', $user->user_type) === 0 ? 'selected' : null }}>Admin</option>
                                    <option value="1" {{ (int)old('user_type', $user->user_type) === 1 ? 'selected' : null }}>Custodian</option>
                                    <option value="2" {{ (int)old('user_type', $user->user_type) === 2 ? 'selected' : null }}>Staff/Faculty</option>
                                    <option value="3" {{ (int)old('user_type', $user->user_type) === 3? 'selected' : null }}>Student</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const $getAccounts = "{{ route('user.fetch') }}"
        const $publicPath = "{{ secure_asset('template/img') }}"
    </script>
    <script src="{{ secure_asset('template/js/sweet-alert.js') }}"></script>
    <script src="{{ secure_asset('template/js/admin.js') }}"></script>
@endpush
