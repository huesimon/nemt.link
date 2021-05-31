<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\URL;

class ShortLink extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function getShortUrlPath()
    {
        return URL::to('/r/' . $this->short_url);
    }

    public function getRedirectResponse()
    {
        return new RedirectResponse($this->url);
    }


}
