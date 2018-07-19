@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h1>Login</h1>
        <form method="POST" action="/login">
            {{csrf_field()}}


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @include('layouts.error')

        </form>
    </div>
@endsection