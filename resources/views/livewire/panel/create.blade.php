<div class="mx-5 p-3 shadow border rounded-3">
    @if ($created)
    <div class="alert alert-success">
        Negocio registrado con éxito
    </div>

    @endif
    <form wire:submit.prevent='store'>
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

        <div class="form-group mb-2">
            <label for="image">Imagen de su negocio</label>
            <input type="file" name="image" id="" class="form-control" wire:model='image' accept="image/*">
            @error('image')
            <div class="text-danger text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mt-3 ">
            <button type="submit" class="btn btn-success btn-md w-100">Guardar</button>
        </div>
    </form>
</div>
