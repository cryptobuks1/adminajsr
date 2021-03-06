@extends('layouts.app')
@section('content')

    <h1>Add User</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger text-left">
            <strong>Whoops!</strong> There were problems with input:
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row">
        <div class="col-12 col-md-6">
            <form class="form" action="{{ url('admin/create-user') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    {{--"old" means that the value is not lost in case of error--}}
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password"
                           value="{{ old('password') }}">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Role</label>
                    </div>

                    <select class="custom-select" id="role" type="text" name="role_id">
                        <option value="" disabled selected>Choose Role</option>
                        @foreach ($roles as $role)
                            <option id="role_id" value={{ $role->id }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add user</button>
            </form>

        </div>
    </div>

@endsection

