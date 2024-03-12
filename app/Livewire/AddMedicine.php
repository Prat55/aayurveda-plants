<?php

namespace App\Livewire;

use App\Models\Medicine;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddMedicine extends Component
{
    use WithFileUploads;

    #[Rule('required|max:195')]
    public $tablet_name;

    #[Rule('nullable|sometimes|min:3')]
    public $where_to_get;

    #[Rule('nullable|sometimes|min:3')]
    public $ingrediency;

    #[Rule('nullable|sometimes|min:3')]
    public $note;

    #[Rule('required')]
    public $use;

    #[Rule('required|image|max:4028')]
    public $image = null;

    public $medicine_token;

    public function medicine_token()
    {
        do {
            $token = substr(md5(mt_rand()), 0, 40);
        } while (Medicine::where("token", "=", $token)->first());

        return $token;
    }

    public function addMedicine()
    {
        $validated = $this->validate();
        $validated['token'] = $this->medicine_token = $this->medicine_token();

        if ($this->image) {
            $validated['medicine_img'] = $this->image->store('medicine-images', 'public');
        }

        Medicine::create($validated);
        $this->resetInput();
        return redirect()->back()->with('success', 'Medicine added successfully.');
    }

    public function resetInput()
    {
        $this->reset(
            'tablet_name',
            'where_to_get',
            'ingrediency',
            'note',
            'use',
            'image',
        );
    }

    public function render()
    {
        return view('livewire.add-medicine');
    }
}
