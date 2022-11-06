<?php

namespace App\Http\Livewire\Review;

use App\Models\Review;
use Livewire\Component;

class Create extends Component
{

    public $busine;

    public $user;
    public $description;
    public $rating = 5;
    public $busine_id;

    protected $rules = [
        'user' => 'required|min:3|string',
        'description' => 'required',
        'rating' => 'required|integer|min:1|max:5',
    ];

    protected $validationAttributes = [
        'user' => 'usuario',
        'description' => 'descripción',
        'rating' => 'valoración',
    ];

    public function store()
    {
        $this->validate();

        $review = new Review();
        $review->user = $this->user;
        $review->description = $this->description;
        $review->rating = $this->rating;
        $review->busines_id = $this->busine_id;

        $review->save();

        /* calculate rating busine */
        $reviews = $this->busine->reviews();
        $this->busine->rating = $reviews->avg('rating');
        $this->busine->save();

        return redirect()->route('main.bussines.show', $this->busine_id);
    }

    public function mount($busine)
    {
        $this->busine = $busine;
        $this->busine_id = $busine->id;
    }

    public function render()
    {
        return view('livewire.review.create');
    }
}
