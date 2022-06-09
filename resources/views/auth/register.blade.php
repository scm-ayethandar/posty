@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container bg-white p-6 rounded-2">
           Register
            <form class="col-lg-6 mx-auto mb-5" action="{{ route('register') }}" method="post" >
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control
                            @error('name') border-danger @enderror" 
                            value="{{ old('name') }}" placeholder="Your name" >
                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control
                            @error('username') border-danger @enderror" 
                            value="{{ old('username') }}"placeholder="Your username" >
                    @error('username')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                <div class="mb-3">
                    <label class="form-label">Password again</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat your password" >
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection