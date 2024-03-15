<?php

namespace App\Livewire;

use App\Models\Medicine;
use App\Models\Plant;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Medicines extends Component
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
        return Medicine::latest()
            ->where('tablet_name', 'like', "%{$this->search}%")
            ->orWhere('where_to_get', 'like', "%{$this->search}%")
            ->get();
    }

    #[Computed()]
    public function medicines()
    {
        return Medicine::latest()
            ->where('lang', $this->lang)
            ->get();
    }

    public function render()
    {
        return view('livewire.medicines');
    }
}
