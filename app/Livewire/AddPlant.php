<?php

namespace App\Livewire;

use App\Models\Plant;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPlant extends Component
{

    use WithFileUploads;


    #[Rule('required|max:195')]
    public $scientific_name;

    #[Rule('required')]
    public $local_name;

    #[Rule('nullable|sometimes|min:3')]
    public $place;

    #[Rule('nullable|sometimes|min:3')]
    public $root;

    #[Rule('nullable|sometimes|min:3')]
    public $stem;

    #[Rule('nullable|sometimes|min:3')]
    public $leaves;

    #[Rule('nullable|sometimes|min:3')]
    public $flower;

    #[Rule('required|image|max:4028')]
    public $image = null;

    #[Rule('required')]
    public $uses;

    public $plant_token;

    public function plant_token()
    {
        do {
            $token = substr(md5(mt_rand()), 0, 40);
        } while (Plant::where("token", "=", $token)->first());

        return $token;
    }

    public function addPlant()
    {
        $validated = $this->validate();
        $validated['token'] = $this->plant_token = $this->plant_token();

        if ($this->image) {
            $validated['plant_img'] = $this->image->store('plant-images', 'public');
        }

        Plant::create($validated);
        $this->resetInput();
        return redirect()->back()->with('success', 'Plant added successfully.');
    }

    public function resetInput()
    {
        $this->reset(
            'scientific_name',
            'local_name',
            'place',
            'root',
            'stem',
            'leaves',
            'flower',
            'image',
            'uses',
        );
    }

    public function render()
    {
        return view('livewire.add-plant');
    }
}
