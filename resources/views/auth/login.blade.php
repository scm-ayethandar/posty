@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container bg-white p-6 rounded-2">
          
        <form class="col-lg-6 mx-auto mt-5 mb-5" action="{{ route('login') }}" method="post" >
        @if (session('status')) 
            <div class="bg-danger mb-3 p-4 rounded-2 text-light text-center">
            {{ session('status') }}
            </div>
        @endif  
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control
                            @error('email') border-danger @enderror" 
                            value="{{ old('email') }}"placeholder="Your email" >
                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control
                            @error('password') border-danger @enderror" placeholder="Choose a password" >
                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" >Remember me</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection