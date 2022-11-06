<div class="container">
    <div class="mx-5">
        @foreach ($bussines as $bussine)
        <div class="border rounded-3 py-2 px-3 mb-2">
            {{$bussine->name}}
            <div class="d-flex justify-content-end">
                <a href="{{route('bussines.edit', $bussine)}}" class="btn btn-primary">Editar</a>
                <button class="btn btn-danger float-right"
                    wire:click="$emit('deleteB', {{$bussine->id}})">Eliminar</button>
            </div>

        </div>
        @endforeach
    </div>
    <div class="mt-2 d-flex justify-content-center">
        {!! $bussines->links() !!}
    </div>
</div>
@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('deleteB', (id) => {
            Swal.fire({
                title: 'Estas Seguro?',
                text: "No podra revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    /* aliminar vacante */
                    Livewire.emit('delete', id)
                    Swal.fire(
                        'Eliminada!',
                        'El negocio ha sido eliminado.',
                        'success'
                    )
                }
            })
        });
</script>
@endpush
