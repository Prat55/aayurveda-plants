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
        </tbody>

        {{ $userinformations->links() }}
    </table>
</div>
