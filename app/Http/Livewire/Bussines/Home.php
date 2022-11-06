<?php

namespace App\Http\Livewire\Bussines;

use App\Models\Busine;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $bussines=Busine::paginate(5);
        return view('livewire.bussines.home', compact('bussines'));
    }
}
