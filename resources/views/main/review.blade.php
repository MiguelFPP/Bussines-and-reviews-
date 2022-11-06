@extends('layout.main')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-6">
            <h3 class="text-center">Reseña para: {{$busine->name}}</h3>
        </div>
        <div class="col-6">
            <a href="{{route('main.bussines.show', $busine)}}" class="btn btn-primary float-end">
                Volver
            </a>
        </div>
    </div>

    {{-- insert component livewire --}}
    <div class="container">
        @livewire('review.create', ['busine' => $busine])
    </div>
</div>
@endsection
