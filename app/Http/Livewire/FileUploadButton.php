<?php

namespace App\Http\Livewire;

use App\Models\PhotoUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\Session\Session;

class FileUploadButton extends Component
{
    use WithFileUploads;

    public $photos;
    
    public $isStored = false;

    public function save()
    {
         /** @var $photo TemporaryUploadedFile */
        // dd($this->photos);
        foreach ($this->photos as $photo) {
            $stored = $photo->storeAs('photos', $photo->getClientOriginalName());
            // dd($stored, $photo->getFilename());
            PhotoUpload::create([
                'user_id' => Auth::user()->id,
                'original_filename' => $photo->getClientOriginalName(),
                // 'hash_name' => $photo->get,
                'mime_type' => $photo->getMimeType(),
            ]);
        }

        session()->flash('message', 'Photos successfully displayed.');
    }

    public function render()
    {
        return view('livewire.file-upload-button');
    }
}
