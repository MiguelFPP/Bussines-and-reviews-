@extends('layout.main')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="text-center">{{$busine->name}}</h1>
        </div>

        <div class="col-12">
            <a href="{{route('home')}}" class="btn btn-primary float-end">
                Volver
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            @if (strpos($busine->image_url, 'http') !== false)
            <img src="{{ $busine->image_url }}" class="img-fluid rounded w-50" alt="{{$busine->name}}">
            @else
            <img src="{{Storage::url($busine->image_url)}}" class="img-fluid rounded w-50" alt="...">
            @endif
        </div>

        <div class="col-6">
            <h3 class="fw-bold">{{$busine->phone}}</h3>
        </div>
        <div class="col-12">
            <p>{{$busine->description}}</p>
        </div>
        {{-- insert component livewire --}}
        {{-- @livewire('panel.edit', ['busine' => $busine]) --}}
    </div>

    <div class="container mt-2">
        @livewire('review.index', ['busine' => $busine])
    </div>
</div>
@endsection
