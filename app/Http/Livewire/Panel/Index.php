<?php

namespace App\Http\Livewire\Panel;

use App\Models\Busine;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['delete' => 'delete'];

    public function delete($id)
    {
        $bussine = Busine::find($id);

        /* if have reviews delete */
        if ($bussine->reviews->count()) {
            $bussine->reviews->each(function ($review) {
                $review->delete();
            });
        }

        /* if have image */
        if ($bussine->image) {
            Storage::disk('public')->delete($bussine->image);
        }

        /* delete bussine */
        $bussine->delete();
    }

    public function render()
    {
        $bussines = Busine::paginate(5);

        return view('livewire.panel.index', compact('bussines'));
    }
}
