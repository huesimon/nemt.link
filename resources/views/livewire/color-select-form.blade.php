<div id="change-color" class="">
    @if (session()->has('message'))
    <div class="p-2 bg-green-500 my-10 rounded shadow">
        {{ session('message') }}
    </div>
    @endif
    <label for="text" class="block text-sm font-medium text-gray-700">Change light color</label>
    <div class="flex items-center justify-between">
        <select wire:model="color" name="color" id="color">
            <option class="bg-red-500" value="red">Red</option>
            <option class="bg-blue-500" value="blue">Blue</option>
            <option class="bg-green-500" value="green">Green</option>
            <option class="bg-yellow-500" value="yellow">Yellow</option>
            <option class="bg-pink-500" value="pink">Pink</option>

        </select>
        <div class="inline-block">
            <button wire:click="save" type="button"
                class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-r-md  bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Change</button>
        </div>
    </div>
</div>