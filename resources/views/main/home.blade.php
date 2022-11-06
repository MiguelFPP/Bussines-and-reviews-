@extends('layout.main')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-6">
            <h1 class="text-center float-start">Listado de Negocios</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('bussines.home') }}" class="btn btn-primary float-end">
                Panel de negocios
            </a>
        </div>
    </div>
    @livewire('bussines.home')
</div>
@endsection
