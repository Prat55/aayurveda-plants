<?php

namespace App\Livewire;

use App\Models\UserInformation;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardInfo extends Component
{
    use WithPagination;

    #[Url()]
    public $search;

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    public function render()
    {
        return view('livewire.dashboard-info', [
            'userinformations' => UserInformation::latest()
                ->where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('phone', 'like', "%{$this->search}%")
                ->paginate(10)
        ]);
    }
}
