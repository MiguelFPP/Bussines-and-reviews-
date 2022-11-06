<?php

namespace App\Http\Livewire\Panel;

use App\Models\Busine;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $busine;

    public $name;
    public $description;
    public $image;
    public $phone;

    public $busine_id;
    public $image_new;
    public $edited;

    protected function rules()
    {
        $rules = [
            'name' => 'required|min:3|string',
            'description' => 'required',
            'phone' => 'required|numeric',
        ];

        if ($this->image_new) {
            $rules['image_new'] = 'required|image|max:7024';
        }
        return $rules;
    }

    protected $validationAttributes = [
        'name' => 'nombre',
        'description' => 'descripción',
        'phone' => 'teléfono',
        'image_new' => 'imagen',
    ];

    protected $rules = [

        'image_new' => 'image|max:7024',
    ];

    public function update()
    {
        $this->validate();

        if ($this->image_new) {
            $image = Storage::put('public/bussines', $this->image_new);
            Storage::delete($this->busine->image_url);
        }

        $busine = Busine::find($this->busine_id);
        $busine->name = $this->name;
        $busine->description = $this->description;
        $busine->phone = $this->phone;
        if ($this->image_new) {
            $busine->image_url = $image;
        }

        $busine->save();
        $this->edited = true;
    }

    public function mount()
    {
        $this->name = $this->busine->name;
        $this->description = $this->busine->description;
        $this->phone = $this->busine->phone;
        $this->image = $this->busine->image_url;
        $this->busine_id = $this->busine->id;
    }
    public function render()
    {
        return view('livewire.panel.edit');
    }
}
