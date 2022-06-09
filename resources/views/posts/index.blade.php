@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container bg-white p-6 rounded-2">
            <form class="col-lg-6 mx-auto mb-5" action="{{ route('posts') }}" method="post" >
                @csrf
                <div class="mb-3">
                    <label class="form-label">Body</label>
                    <textarea class="form-control" name="body" placeholder="Post something" style="height: 100px"></textarea>
                    @error('body')
                        <div class="text-danger mt-2 text-sm">
                            {{ message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
    </div>
@endsection