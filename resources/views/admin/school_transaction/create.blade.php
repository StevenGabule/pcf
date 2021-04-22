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
                <h5 class="h5 mb-0 text-gray-800">Create New User</h5>
                <button onclick="window.history.back()"
                        type="button"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    Back
                </button>
            </div>

            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger pb-0 small">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputName">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail4">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirm">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputUserType">User Type</label>
                                <select id="inputUserType" name="user_type" class="custom-select">
                                    <option value="0" {{ (int)old('user_type') === 0 ? 'selected' : null }}>Admin</option>
                                    <option value="1" {{ (int)old('user_type') === 1 ? 'selected' : null }}>Custodian</option>
                                    <option value="2" {{ (int)old('user_type') === 2 ? 'selected' : null }}>Staff/Faculty</option>
                                    <option value="3" {{ (int)old('user_type') === 3 ? 'selected' : null }}>Student</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar"
                                           id="customFile" accept="image/x-png,image/gif,image/jpeg" >
                                    <label class="custom-file-label" for="customFile" >Choose file</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
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
