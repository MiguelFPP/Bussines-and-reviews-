<div class="mx-5">
    <div class="d-flex justify-content-between mb-2">
        <div class="col-6">
            <h3 class="fw-bold">Reseñas</h3>
        </div>
        <div class="col-6">
            <a href="{{route('main.bussines.review', $busine)}}" class="btn btn-primary float-end">
                Agregar
            </a>
        </div>
    </div>
    @if ($busine->reviews->count() === 0)
    <div class="alert alert-info">
        No hay reseñas para este negocio
    </div>
    @else
    @foreach ($reviews as $review)
    <div class="shadow p-3 mb-3 bg-body rounded d-flex justify-content-between">

        <div>
            <a href="">
                <img src="{{ asset('images/user.png') }}" class="" alt="usuario">
            </a>
        </div>
        <div class="align-items-center w-75">
            <h5>{{$review->user}}</h5>
            <p>{{$review->description}}</p>
        </div>
        <div class="flex-row-reverse">
            <div class="form-group">
                @for ($i = 0; $i < $review->rating; $i++)
                    <img src="{{ asset('images/star-gold.png') }}" alt="" style="width: 10%">
                    @endfor

                    @for ($i = 0; $i < 5 - $review->rating; $i++)
                        <img src="{{ asset('images/star.png') }}" alt="" style="width: 10%">
                        @endfor
            </div>
        </div>
    </div>
    @endforeach
    <div class="mt-2 d-flex justify-content-center">
        {!! $reviews->links() !!}
    </div>
    @endif
</div>
