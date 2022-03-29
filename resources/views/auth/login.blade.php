@extends('layouts.app')

@section('content')

<div class="registration-form">
    <form class="form" action="{{ route('login') }}" method="POST">
      @csrf  
      <div>
<label for="email">Email</label>
        <input type="email" 
        id="email"
        name="email"
        value="{{ old('email') }}"
        >
        </div>
        <div>
<label for="password">Password</label>
        <input type="password" 
        id="password"
        name="password"
        >
        </div>
 
        <div>
      <button type="submit">Submit</button>

        </div>
    </form>
</div>
@endsection