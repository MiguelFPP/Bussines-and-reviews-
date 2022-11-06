@extends('layout.main')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-6">
            <h1 class="text-center float-star">Crud de negocios</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('home') }}" class="btn btn-primary float-end">
                Panel de negocios
            </a>
            <a href="{{route('bussines.create')}}" class="btn btn-primary float-end mx-2">
                Agregar negocio
            </a>
        </div>
    </div>

    {{-- insert component livewire --}}
    @livewire('panel.index')
</div>
@endsection
