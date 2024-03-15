<?php

namespace App\Livewire;

use App\Models\Plant;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Plants extends Component
{
    #[Url()]
    public $search;

    #[Url()]
    public $lang = "eng";

    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    #[Computed()]
    public function searchData()
    {
        return Plant::latest()
            ->where('local_name', 'like', "%{$this->search}%")
            ->orWhere('scientific_name', 'like', "%{$this->search}%")
            ->get();
    }

    #[Computed()]
    public function plants()
    {
        return Plant::latest()
            ->where('lang', $this->lang)
            ->get();
    }
    public function render()
    {
        return view('livewire.plants');
    }
}
