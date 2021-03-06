<div class="flex flex-col items-center mt-24">
    <div class="flex flex-row justify-center w-2/3 mb-4">

        <input class="focus:outline-none focus:ring focus:border-blue-300 bg-gray-400 w-full text-6xl text-center"
            name="url" wire:model="inputUrl" />

    </div>
    <div class="mb-2">
        <button type="button" class="px-6 py-3 rounded-md font-semibold bg-blue-600 text-white focus:outline-black"
            wire:click="generateUrl">
            Generate URL
        </button>
    </div>
    <div class=" flex flex-col items-center justify-center space-y-4">
        <span>{{ $resultUrl }}</span>
        <button type="button" class="px-6 py-3 rounded-md font-semibold bg-blue-600 text-white focus:outline-black">
            Copy!
        </button>
    </div>
</div>