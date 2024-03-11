<div class="bg-gray-300">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full overflow-scroll text-sm text-left text-gray-500 rtl:text-right sm:overflow-hidden">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="flex flex-wrap items-center justify-between px-6 py-3">
                        Phone
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
                @forelse ($userinformations as $info)
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $info->name }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $info->email }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $info->phone }}
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b hover:bg-gray-50 ">
                        <td colspan="3" scope="row"
                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            No data found!
                        </td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="3" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        {{ $userinformations->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="px-2 py-5 mt-5 text-xl">
        Plants Information
    </div>

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
            <tbody>
                <tr wire:loading class="bg-white border-b hover:bg-gray-50 ">
                    <td colspan="3" scope="row"
                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                        Loading . . .
                    </td>
                </tr>
                @forelse ($plants as $plant)
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
                                class="px-4 py-2 font-semibold text-gray-800 bg-red-300 border border-gray-400 rounded shadow hover:bg-red-400">
                                Remove
                            </button>
                        </td> 
                    </tr>
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
                        {{ $plants->links() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
