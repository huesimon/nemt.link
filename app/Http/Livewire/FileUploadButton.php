<?php

namespace App\Http\Livewire;

use App\Models\PhotoUpload;
use App\Notifications\ImageUploaded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
            $storage = Storage::putFile('photos', $photo);
            $photo = PhotoUpload::create([
                'user_id' => Auth::user()->id,
                'original_filename' => $photo->getClientOriginalName(),
                // 'hash_name' => $storage,
                'path' => $storage,
                'mime_type' => $photo->getMimeType(),
            ]);
             $this->emit('photoAdded');
            Auth::user()->notify(new ImageUploaded(Auth::user(), $photo));
        }
       
        session()->flash('message', 'Photos successfully displayed.');
    }

    public function render()
    {
        return view('livewire.file-upload-button');
    }
}
