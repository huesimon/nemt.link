<?php

namespace App\Http\Livewire;

use App\Models\ColorChange;
use App\Notifications\TextSent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ColorSelectForm extends Component
{
    public $color = 'red';

    public function save()
    {
        $color = ColorChange::create([
            'user_id' => Auth::user()->id,
            'color' => $this->color,
        ]);
        $this->emit('colorAdded');
        Auth::user()->notify(new TextSent(Auth::user(), $this->color));
        session()->flash('message', 'Color successfully changed.');
    }
    public function render()
    {
        return view('livewire.color-select-form');
    }
}
