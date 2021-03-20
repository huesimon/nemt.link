<?php

namespace App\Http\Livewire;

use App\Models\PhotoUpload;
use Livewire\Component;

class RecentFilesList extends Component
{
    public $photos = [];
    protected $listeners = ['photoAdded' => 'refreshList'];

    public function refreshList()
    {
        $this->photos = PhotoUpload::viewable()->orderByDesc('created_at')->limit(5)->get();
    }

    public function render()
    {
        $this->refreshList();
        return view('livewire.recent-files-list');
    }
}
