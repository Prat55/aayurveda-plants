<div>
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center gap-5 space-x-4 font-light">
            <button class="px-2 {{ $lang === 'eng' ? 'text-gray-900 border-b border-gray-800' : 'text-gray-500' }} py-4"
                wire:click="setLang('eng')">
                English
            </button>
            <button class="py-4 px-2 {{ $lang === 'mar' ? 'text-gray-900 border-b border-gray-800' : 'text-gray-500' }}"
                wire:click="setLang('mar')">Marathi
            </button>
            <button class="py-4 px-2 {{ $lang === 'hin' ? 'text-gray-900 border-b border-gray-800' : 'text-gray-500' }}"
                wire:click="setLang('hin')">Hindi</button>
        </div>

        @if ($search)
            Searching result for {{ $search }}
        @endif

        <livewire:search />
    </div>

    <div class="flex flex-wrap justify-center w-full gap-4 px-2 py-3">
        @forelse ($this->plants as $plant)
            <a href="/plant/{{ $plant->token }}"
                class="items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700">
                <img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg"
                    src="{{ asset('storage/' . $plant->plant_img) }}" alt="{{ $plant->scientific_name }}"
                    style="height: 250px;width:350px">
                <div class="px-2 py-4 leading-normal">
                    <span class="py-1 font-semibold">Scientific
                        Name:&nbsp;</span><span>{{ $plant->scientific_name ?: '-' }}</span><br>

                    <span class="font-semibold">Local
                        name:&nbsp;</span><span>{{ $plant->getShortLocalName() ?: '-' }}</span><br>

                    <span class="font-semibold">Root:&nbsp;</span><span>{{ $plant->getShortRoot() ?: '-' }}</span><br>

                    <span
                        class="font-semibold">Leaves:&nbsp;</span><span>{{ $plant->getShortLeaves() ?: '-' }}</span><br>
                    <span
                        class="font-semibold">Flowers:&nbsp;</span><span>{{ $plant->getShortFlower() ?: '-' }}</span><br>
                    <span class="font-semibold">Use:&nbsp;</span><span>{{ $plant->getShortUses() }}</span><br>
                </div>
            </a>
        @empty
            <div class="text-center">No results found!</div>
        @endforelse
    </div>
</div>
