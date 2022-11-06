<div class="container">
    <div class="shadow border rounded-3 mx-5 p-3">
        @if ($edited)
        <div class="alert alert-success">
            Negocio editado con éxito
        </div>
        @endif
        <form wire:submit.prevent='update'>
            <div class="form-group mb-2">
                <label for="name">Nombre Negocio</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Ingrese el nombre de su negocio"
                    wire:model="name">
                @error('name')
                <div class="text-danger text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="phone">Numero telefono</label>
                <input type="tel" name="phone" id="" placeholder="Ingrese el numero de telefono de su negocio"
                    class="form-control" wire:model="phone">
                @error('phone')
                <div class="text-danger text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="name">Descripción</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"
                    placeholder="Ingrese una descripcion para su negocio" wire:model="description"></textarea>
                @error('description')
                <div class="text-danger text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <label for="">Imagen Actual</label>
            <div class="form-group d-flex justify-content-center">
                {{-- show image --}}
                @if (strpos($image, 'http') !== false)
                <img src="{{ $image }}" class="img-fluid rounded mb-2 w-25" alt="{{$name}}">
                @else
                <img src="{{ Storage::url($image)}}" alt="" class="img-thumbnail mb-2 w-25 rounded">
                @endif
            </div>

            <div class="form-group mb-2">
                <label for="image">Imagen de su negocio</label>
                <input type="file" name="image" id="" class="form-control" wire:model='image_new' accept="image/*">
                @error('image_new')
                <div class="text-danger text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success btn-md w-100">Guardar</button>
            </div>
        </form>
    </div>
</div>
