<?php

namespace App\Http\Livewire;

use App\Models\TextToSpeech;
use Livewire\Component;

class TextToSpeechList extends Component
{
    public $textList = [];
    protected $listeners = ['textAdded' => 'refreshList'];

    
    public function refreshList()
    {
        $this->textList = TextToSpeech::viewable()->orderByDesc('published_at')->limit(5)->get();
    }

    public function render()
    {
        $this->refreshList();
        return view('livewire.text-to-speech-list');
    }
}
