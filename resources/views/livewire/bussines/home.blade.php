<div class="container">
    <div class="mx-5">
        @foreach ($bussines as $bussine)
        <div class="shadow p-3 mb-3 bg-body rounded d-flex justify-content-between">
            <div class="row">
                <div class="col-3" style="display: block">
                    <div class="d-flex justify-content-start">
                        {{-- verify what image_url contain http --}}
                        @if (strpos($bussine->image_url, 'http') !== false)
                        <img src="{{ $bussine->image_url }}" class="img-fluid rounded" alt="{{$bussine->name}}">
                        @else
                        <img src="{{ Storage::url($bussine->image_url)}}" class="img-fluid rounded"
                            alt="{{$bussine->name}}">
                        @endif
                    </div>
                </div>
                <div class="col-9">
                    <div class="d-flex align-items-start flex-row justify-content-end">
                        @for ($i = 0; $i < $bussine->rating; $i++)
                            <img src="{{ asset('images/star-gold.png') }}" alt="" style="width: 2rem">
                            @endfor

                            @for ($i = 0; $i < 5 - $bussine->rating; $i++)
                                <img src="{{ asset('images/star.png') }}" alt="" style="width: 2rem">
                                @endfor
                    </div>
                    <a href="{{route('main.bussines.show', $bussine)}}">
                        <h5>{{$bussine->name}}</h5>
                    </a>
                    <span class="fw-bold">{{$bussine->phone}}</span>
                    <p>{{$bussine->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-2 d-flex justify-content-center">
        {!! $bussines->links() !!}
    </div>
</div>
