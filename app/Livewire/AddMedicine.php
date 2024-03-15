<?php

namespace App\Livewire;

use App\Models\Medicine;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddMedicine extends Component
{
    use WithFileUploads;

    use WithPagination;

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

    #[Rule('required')]
    public $lang;

    #[Rule('required|image|max:4028')]
    public $image = null;

    public $medicine_token;

    #[Url()]
    public $search;

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

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

    public function remove(int $id)
    {
        $item = Medicine::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item removed successfully');
    }

    #[Computed()]
    public function medicines()
    {
        return Medicine::latest()
            ->where('tablet_name', 'like', "%{$this->search}%")
            ->orWhere('where_to_get', 'like', "%{$this->search}%")
            ->paginate(10);
    }

    public function render()
    {
        return view('livewire.add-medicine');
    }
}
