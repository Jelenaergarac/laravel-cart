@extends('layouts.app')

@section('content')

<div class="registration-form">
    <form class="form" action="{{ route('register') }}" method="POST">
        @csrf
        <div>
    <label for="firstname">First Name</label>
        <input type="text" 
        id="firstname"
        name="firstname"
        value="{{ old('firstname') }}"
        >
        @error('firstname')
            <p class="error-msg">{{ $message }}</p>
        @enderror
    </div>
        <div>
<label for="lastname">Last Name</label>
        <input type="text" 
        id="lastname"
        name="lastname"
        value="{{ old('lastname') }}"
        >
        @error('lastname')
            <p class="error-msg">{{ $message }}</p>
        @enderror
        </div>
        <div>
<label for="email">Email</label>
        <input type="email" 
        id="email"
        name="email"
        value="{{ old('email') }}"
        >
        @error('email')
            <p class="error-msg">{{ $message }}</p>
        @enderror
        </div>
        <div>
<label for="password">Password</label>
        <input type="password" 
        id="password"
        name="password"
        >
        @error('password')
            <p class="error-msg">{{ $message }}</p>
        @enderror
        </div>
        <div>
<label for="password_confirmation">Confirm Your Password Here</label>
        <input type="password" 
        id="password_confirmation"
        name="password_confirmation"
        >
        @error('password_confirmation')
            <p class="error-msg">{{ $message }}</p>
        @enderror
        </div>
        <div>
      <button type="submit">Submit</button>

        </div>
    </form>
</div>
@endsection