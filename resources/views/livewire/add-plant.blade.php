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

    <div class="relative py-5 mt-5 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full overflow-scroll text-sm text-left text-gray-500 rtl:text-right">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Plant Image
                    </th>
                    <th scope="col">
                        Local Name
                    </th>
                    <th scope="col">
                        Scientific Name
                    </th>

                    <th>
                        <div class="hidden sm:block">
                            <livewire:search />
                        </div>
                    </th>

                </tr>
            </thead>
            <tbody class="relative">
                <tr wire:loading class="bg-white border-b hover:bg-gray-50 ">
                    <td colspan="3" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        Loading . . .
                    </td>
                </tr>
                @forelse ($this->plants as $plant)
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <th scope="row"
                            class="flex items-center justify-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <img src="{{ asset('storage/' . $plant->plant_img) }}" alt="{{ $plant->local_name }}"
                                height="50px" width="50px">
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $plant->getShortLName() }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $plant->scientific_name }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            <button
                                class="px-4 py-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded shadow me-2 hover:bg-gray-100">
                                Edit
                            </button>
                            <button
                                class="px-4 py-2 font-semibold text-white bg-red-500 border border-gray-400 rounded shadow hover:bg-red-300"
                                x-on:click="$('{{ $plant->token }}').toggleClass('hidden')">
                                Remove
                            </button>
                        </td>
                    </tr>

                    <div class="absolute top-0 hidden w-full h-full" id="{{ $plant->token }}">
                        <div class="w-full bg-white">
                            <div class="text-center">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="text-center">
                                <h4 class="text-black">Are you sure you want to remove</h4>
                            </div>
                            <div class="flex justify-end gap-5">
                                <button
                                    class="px-4 py-2 font-semibold text-white bg-red-500 border border-gray-400 rounded shadow hover:bg-red-300"
                                    wire:click='remove({{ $plant->id }})'>
                                    Remove
                                </button>
                                <button
                                    class="px-4 py-2 font-semibold text-white bg-red-500 border border-gray-400 rounded shadow hover:bg-red-300"
                                    wire:click='remove({{ $plant->id }})'>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td colspan="3" scope="row"
                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            No data found!
                        </td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="4" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        {{ $this->plants->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
