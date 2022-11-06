<?php

namespace App\Http\Livewire\Panel;

use App\Models\Busine;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $phone;
    public $image;
    public $created;

    protected $validationAttributes = [
        'name' => 'nombre',
        'description' => 'descripción',
        'phone' => 'teléfono',
        'image' => 'imagen',
    ];

    protected $rules = [
        'name' => 'required|min:3|string',
        'description' => 'required',
        'phone' => 'required|numeric',
        'image' => 'required|image|max:7024',
    ];

    public function store()
    {
        $this->validate();

        $image = Storage::put('public/bussines', $this->image);

        $bussine = Busine::create([
            'name' => $this->name,
            'description' => $this->description,
            'phone' => $this->phone,
            'rating' => 0,
            'image_url' => $image,
        ]);

        $this->reset();
        $this->created = true;
    }

    public function render()
    {
        return view('livewire.panel.create');
    }
}
