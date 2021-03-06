<?php

namespace App\Http\Livewire;

use App\Models\ShortLink;
use Livewire\Component;

class LinkGenerator extends Component
{
    public $inputUrl = null;
    public $resultUrl = 'Result';

    public $count = 0;

    protected $rules = [
        'inputUrl' => 'required|url',
    ];

    public function increment()
    {
        $this->count++;
    }

    public function generateUrl()
    {
        $this->validate();

        $shortLink = ShortLink::create([
            'url' => $this->inputUrl,
            'short_url' => random_int(1000, 9999),
        ]);

        $this->resultUrl = $shortLink->getShortUrlPath();
    }
    public function render()
    {
        return view('livewire.link-generator');
    }
}
