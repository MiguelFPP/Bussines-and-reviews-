<?php

namespace App\Http\Livewire\Review;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $busine;

    public function mount($busine)
    {
        $this->busine = $busine;
    }

    public function render()
    {
        $busine=$this->busine;
        $reviews=$busine->reviews()->paginate(5);
        return view('livewire.review.index', compact('busine', 'reviews'));
    }
}
