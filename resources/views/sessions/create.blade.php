@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h1>Login</h1>
        <form action="">
            {{csrf_field()}}


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </div>
@endsection