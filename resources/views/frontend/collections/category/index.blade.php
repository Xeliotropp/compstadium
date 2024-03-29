@extends('layouts.app')

@section('title', 'Категории')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            @forelse ($categories as $category)
            <div class="col-6 col-md-3">
                <div class="category-card">
                    <a href="{{ url('/collections/'. $category->slug) }}">
                        <div class="category-card-img">
                            <img src="{{ asset($category->image) }}" class="w-100" alt="">
                        </div>
                        <div class="category-card-body">
                            <h5>{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <h5>Няма налични категории</h5>
            </div>
            @endforelse

        </div>
    </div>
</div>

@endsection