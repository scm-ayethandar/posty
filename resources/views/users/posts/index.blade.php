@extends('layouts.app')

@section('content')
        <div class="container">
        <div class=" col-lg-8 mx-auto bg-white rounded-2">
            <div class="row mx-auto">
                <h1>{{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}
                    and received {{ $user->receivedLikes->count() }} likes
                </p>
            </div>
            
            @if ($posts->count()) 
                    @foreach ($posts as $post)
                    <div class="row mx-auto">
                        <x-post :post="$post" /> 
                    </div>
                                             
                    @endforeach
                   
                    <div class="row mx-auto mb-5">
                        {{ $posts->links() }}</div>
                @else
                    <p class="row mx-auto mb-5">{{ $user->name }} does not have any posts.</p>
                @endif
        </div>
        
    </div>

@endsection