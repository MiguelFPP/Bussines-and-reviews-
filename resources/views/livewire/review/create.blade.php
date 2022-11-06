<div class="shadow border rounded-3 p-3 mx-5">
    <form wire:submit.prevent='store'>
        <div class="form-group mb-2">
            <label for="user">Nombre de usuario</label>
            <input type="text" name="user" id="" class="form-control" placeholder="Ingrese el nombre a mostrar"
                wire:model="user">
            @error('user')
            <div class="text-danger text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="name">Descripción</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"
                placeholder="Ingrese la reseña para {{$busine->name}}" wire:model="description"></textarea>
            @error('description')
            <div class="text-danger text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-group">
                <span class="star-cb-group">
                    <input type="radio" id="rating-5" name="rating" value="5" wire:model.defer='rating' />
                    <label for="rating-5">5</label>
                    <input type="radio" id="rating-4" name="rating" value="4" checked="checked"
                        wire:model.defer='rating' />
                    <label for="rating-4">4</label>
                    <input type="radio" id="rating-3" name="rating" value="3" wire:model.defer='rating' />
                    <label for="rating-3">3</label>
                    <input type="radio" id="rating-2" name="rating" value="2" wire:model.defer='rating' />
                    <label for="rating-2">2</label>
                    <input type="radio" id="rating-1" name="rating" value="1" wire:model.defer='rating' />
                    <label for="rating-1">1</label>
                </span>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-md w-100">Guardar</button>
        </div>
    </form>
</div>
