@extends('templates.main')

@section('content')
    <h1>Register</h1>

    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Password Confirm</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection