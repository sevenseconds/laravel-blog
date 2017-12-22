@extends('layouts.master')
@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup')  }}" method="post">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <button class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <button class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection