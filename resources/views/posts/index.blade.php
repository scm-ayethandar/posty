@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container bg-white p-6 rounded-2">
            @auth
            <form class="col-lg-6 mt-5 mx-auto mb-5" action="{{ route('posts') }}" method="post" >
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
            @endauth
            <div class="col-lg-6 mx-auto mb-5">
                @if ($posts->count()) 
                    @foreach ($posts as $post)
                        <x-post :post="$post" />                        </div>
                    @endforeach
                    <div class="col-lg-6 mx-auto mb-5">
                        {{ $posts->links() }}</div>
                @else
                    <p>There are no posts.</p>
                @endif
            </div>
        </div>
    </div>
@endsection