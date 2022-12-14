@extends('templates.main')

@section('content')
    <h1>Login</h1>

    <form method="POST" action="{{route('login')}}">
        @csrf
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
        <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection