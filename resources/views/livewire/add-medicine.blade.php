<div>
    <form class="w-full max-w-lg py-5 my-3" wire:submit.prevent="addMedicine">
        <div class="flex flex-wrap -mx-3">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-plant-name">
                    Tablet/Medicine/Cream/Gel Name <span class="text-red-500">*</span>
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-plant-name" type="text" wire:model="tablet_name" autofocus>
                @error('tablet_name')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2 px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-local-name">
                    Where To Get
                </label>
                <input
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-local-name" type="text" wire:model="where_to_get">
                @error('where_to_get')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap items-end w-full px-5 mb-2">
            <div class="w-1/2 px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-uses">
                    Uses <span class="text-red-500">*</span>
                </label>
                <textarea name="uses" cols="30" rows="5"
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-uses" wire:model="use"></textarea>
                @error('use')
                    <p class="text-xs italic text-red-500">Please fill out this field.</p>
                @enderror
            </div>
            <div class="w-1/2">
                <div class="w-full px-3">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-local-name">
                        Ingrediency
                    </label>
                    <input
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-local-name" type="text" wire:model="ingrediency">
                    @error('ingrediency')
                        <p class="text-xs italic text-red-500">Please fill out this field.</p>
                    @enderror
                </div>
                <div class="w-full px-3 mt-4">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-local-name">
                        Note
                    </label>
                    <input
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-local-name" type="text" wire:model="note">
                    @error('note')
                        <p class="text-xs italic text-red-500">Please fill out this field.</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="flex w-1/2 px-3 mb-6 md:mb-0">
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                        for="grid-plant-img">
                        Medicine Image <span class="text-red-500">*</span>
                    </label>
                    <input
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-plant-img" type="file" wire:model="image">
                    @error('medicine_img')
                        <p class="text-xs italic text-red-500">Please fill out this field.</p>
                    @enderror
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="grid-lang">
                        Language
                    </label>
                    <select name="lang" id="lang"
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model="lang">
                        <option value="eng">English</option>
                        <option value="mar">Marathi</option>
                        <option value="hin">Hindi</option>
                    </select>
                </div>
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
                        Medicine Image
                    </th>
                    <th scope="col">
                        Tablet Name
                    </th>
                    <th scope="col">
                        Where To Get
                    </th>

                    <th>
                        <div class="hidden sm:block">
                            <livewire:search />
                        </div>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr wire:loading class="bg-white border-b hover:bg-gray-50 ">
                    <td colspan="3" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        Loading . . .
                    </td>
                </tr>
                @forelse ($this->medicines as $medicine)
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <th scope="row"
                            class="flex items-center justify-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <img src="{{ asset('storage/' . $medicine->medicine_img) }}"
                                alt="{{ $medicine->tablet_name }}" height="50px" width="50px">
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $medicine->tablet_name }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $medicine->where_to_get }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            <button
                                class="px-4 py-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded shadow me-2 hover:bg-gray-100">
                                Edit
                            </button>
                            <button
                                class="px-4 py-2 font-semibold text-white bg-red-500 border border-gray-400 rounded shadow hover:bg-red-300"
                                wire:click='remove({{ $medicine->id }})'>
                                Remove
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td colspan="4" scope="row"
                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            No data found!
                        </td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="4" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        {{ $this->medicines->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
