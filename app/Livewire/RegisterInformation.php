<?php

namespace App\Livewire;

use App\Models\UserInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterInformation extends Component
{

    #[Rule('required|min:2|max:20|string')]
    public $name;

    #[Rule('required|email|unique:user_information')]
    public $email;

    #[Rule('required|min:5')]
    public $disease;

    #[Rule('required|min:5')]
    public $description;

    #[Rule('required|max:10|min:10|unique:user_information')]
    public $phone;

    public function registerInformation()
    {
        $validated = $this->validate();

        UserInformation::create($validated);

        $this->resetInput();

        return redirect()->back()->with('success', 'Registered Successfully');
    }

    public function resetInput()
    {
        $this->reset(
            'name',
            'email',
            'disease',
            'description',
            'phone',
        );
    }

    public function render()
    {
        return view('livewire.register-information');
    }
}
