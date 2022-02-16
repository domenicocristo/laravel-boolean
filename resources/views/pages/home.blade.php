@extends('layouts.main-layout')
@section('content')
    @auth
        <h1>Ciao {{ Auth::user() -> name }} sei nella Home</h1>
        <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>

        <br><hr><br>

        <a class="btn btn-primary" href="{{ route('create') }}">CREATE</a>

        <br><hr><br>

        <postcards-component></postcards-component>

        <br><hr><br>
    @endauth
        @guest
            <h2>Registrazione</h2>
            <form action="{{ route('register') }}" method="POST">
                @method('POST')
                @csrf

                <label for="name">Name</label><br>
                <input type="text" name="name"><br>
                <label for="email">E-mail</label><br>
                <input type="text" name="email"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
                <label for="password_confirmation">Password confirmation</label><br>
                <input type="password" name="password_confirmation"><br>
                <br>
                <button type="submit" class="btn btn-success">REGISTER</button>
            </form>

            <br><hr><br>

            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf

                <label for="email">E-mail</label><br>
                <input type="text" name="email"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password"><br>
                <br>
                <button type="submit" class="btn btn-success">LOGIN</button>
            </form>
        @endguest
@endsection