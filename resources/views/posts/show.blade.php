@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container bg-white p-6 rounded-2">
            <x-post :post="$post" />
        </div>
    </div>
@endsection