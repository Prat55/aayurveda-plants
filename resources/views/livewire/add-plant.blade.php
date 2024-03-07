<div>
    <form class="w-full max-w-lg py-5" wire:submit.prevent="addPlant">
        <div class="flex flex-wrap -mx-3">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-plant-name">
                    Plant Scientific Name
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-plant-name" type="text" wire:model="scientific_name" autofocus>
                @error('scientific_name')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-local-name">
                    Local Name
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-local-name" type="text" wire:model="local_name">
                @error('local_name')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                    for="grid-place-to-find">
                    Place to find
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-place-to-find" type="text" wire:model="place">
                @error('place')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="root">
                    Root
                </label>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="root" type="text" wire:model="root">
                @error('root')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-stem">
                    Stem
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-stem" type="text" wire:model="stem">

                @error('stem')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="leaves">
                    Leaves
                </label>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="leaves" type="text" wire:model="leaves">
                @error('leaves')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-flowers">
                    Flowers
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-flowers" type="text" wire:model="flower">
                @error('flower')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-plant-img">
                    Plant Image
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-plant-img" type="file" wire:model="image">
                @error('plant_img')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap items-end w-full px-5 mb-2">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-uses">
                    Uses
                </label>
                <textarea name="uses" cols="30" rows="5"
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-uses" wire:model="uses"></textarea>
                @error('uses')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <div class="flex items-center justify-center">
                    <div wire:loading wire:target="image" class="text-center">
                        Uploading...
                    </div>

                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" width="150px" height="200px" />
                    @endif
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-end w-full px-5">
            <div class="flex items-center justify-center px-3 mb-6 md:mb-0">
                @include('frontend.message')
                <button type="submit" class="px-3 py-2 bg-orange-500 border border-black rounded">Add</button>
            </div>
        </div>
    </form>
</div>
