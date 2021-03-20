<?php

namespace App\Http\Livewire;

use App\Models\ColorChange;
use Livewire\Component;

class RecentColorsList extends Component
{
    public $colors;

    protected $listeners = ['colorAdded' => 'refreshList'];

    public function refreshList()
    {
        $this->colors = ColorChange::orderByDesc('created_at')->limit(5)->get();
    }
    public function render()
    {
        $this->refreshList();
        return view('livewire.recent-colors-list');
    }
}
