@extends('layouts.main-layout')
@section('content')
    
    <h1>Create Postcards</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf

        <label for="sender">Sender:</label>
        <input type="text" name="sender"><br>

        <label for="address">Address:</label>
        <input type="text" name="address"><br>

        <label for="text">Text:</label>
        <input type="text" name="text"><br>

        <label for="image">Image</label>
        <input type="file" name="image"><br>

        <br>
        
        <input class="btn btn-primary" type="submit" value="CREATE"><br>

        <br><hr><br>

        <a class="btn btn-secondary" href="{{url('/')}}">BACK TO HOME</a>
    </form>
@endsection