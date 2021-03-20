<?php

namespace App\Http\Livewire;

use App\Models\TextToSpeech;
use App\Notifications\TextSent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TextToSpeechButton extends Component
{
    public $text = '';
    
    public function submit()
    {
        $user = Auth::user();

        TextToSpeech::create([
            'user_id' => $user->id,
            'text' => $this->text
        ]);

        $this->emit('textAdded');
        $user->notify(new TextSent($user, $this->text));
        $this->text = '';
    }

    public function render()
    {
        return view('livewire.text-to-speech-button');
    }
}
