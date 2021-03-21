<div class="">
    @error('photos') <span class="error">{{ $message }}</span> @enderror

    @if (session()->has('message'))
    <div class="p-2 bg-green-500 my-10 rounded shadow">
        {{ session('message') }}
    </div>
    @endif

    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">
        <div class="w-full mt-2 p-2 bg-blue-500 rounded-lg text-center cursor-pointer border border-dashed border-gray-500"
            @click="$refs.fileInput.click()">Display on TV</div>
        <input x-ref="fileInput" type="file" multiple wire:model="photos" class="hidden" />

        <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
    </div>
    @if ($photos)
    <button wire:loading.remove wire:click.prevent="save"
        class="w-full bg-green-500 mt-2 p-2 rounded shadow-lg">Show</button>
    <button wire:loading wire:target="save" class="w-full p-2 text-white rounded shadow-lg">
        <i class="fas fa-spinner fa-spin text-2xl"></i>
    </button>
    @endif
</div>