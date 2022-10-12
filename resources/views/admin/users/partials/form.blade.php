@csrf
    <div class="mb-3">
        <label for="name">Name</label>
        <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="name" 
            value="{{old('name')}} @isset($user) {{ $user->name }} @endisset">
        @error('name')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" 
            value="{{old('email')}} @isset($user) {{ $user->email }} @endisset ">
        @error('email')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
        @enderror
    </div>
    @isset($create)
    <div class="mb-3">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
        @error('password')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
        @enderror
    </div>
    @endisset
    <div class="mb-3">
        @foreach($roles as $role)
            <div clas="form-check">
                <input class="form-check-input" name="roles[]"
                    type="checkbox" value="{{ $role->id }}" id="{{ $role->name }}"
                @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset> 
                <lable class="form-check-label" for="{{ $role->name }}">
                    {{ $role->name }}
                </lable>
            </div>
        @endforeach

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>