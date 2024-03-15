<?php

namespace App\Livewire;

use App\Models\Plant;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddPlant extends Component
{

    use WithFileUploads;
    use WithPagination;


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

    #[Rule('required')]
    public $lang;

    public $plant_token;

    #[Url()]
    public $search;

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

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

    public function remove(int $id)
    {
        $item = Plant::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Plant removed successfully');
    }

    #[Computed()]
    public function plants()
    {
        return Plant::latest()
            ->where('local_name', 'like', "%{$this->search}%")
            ->orWhere('scientific_name', 'like', "%{$this->search}%")
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.add-plant');
    }
}
