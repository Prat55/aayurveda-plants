<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class RegisterInformation extends Component
{

    #[Rule('required|min:2')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required')]
    public $phone;

    public function registerInformation()
    {
        $validated = $this->validate();

        User::create($validated);

        return redirect()->back()->with('success', 'Registered Successfully');
    }

    public function render()
    {
        return view('livewire.register-information');
    }
}
