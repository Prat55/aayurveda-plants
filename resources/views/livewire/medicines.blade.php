<div>
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center gap-5 space-x-4 font-light">
            <button class="px-2 {{ $lang === 'eng' ? 'text-gray-900 border-b border-black' : 'text-gray-500' }} py-4"
                wire:click="setLang('eng')">
                English
            </button>

            <button class="py-4 px-2 {{ $lang === 'mar' ? 'text-gray-900 border-b border-black' : 'text-gray-500' }}"
                wire:click="setLang('mar')">
                Marathi
            </button>

            <button class="py-4 px-2 {{ $lang === 'hin' ? 'text-gray-900 border-b border-black' : 'text-gray-500' }}"
                wire:click="setLang('hin')">
                Hindi
            </button>
        </div>

        @if ($search)
            Searching {{ $search }}
        @endif

        <livewire:search />
    </div>

    <div class="flex flex-wrap justify-center w-full gap-4 px-2 py-3">
        @forelse ($this->medicines as $medicine)
            <a href="/medicine/{{ $medicine->token }}"
                class="items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700">
                <img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg"
                    src="{{ asset('storage/' . $medicine->medicine_img) }}" alt="{{ $medicine->tablet_name }}"
                    style="height: 250px;width:350px">
                <div class="px-2 py-4 leading-normal">
                    <span class="py-1 font-semibold">
                        Medicine Name:&nbsp;
                    </span>
                    <span>{{ $medicine->getShortTN() ?: '-' }}</span><br>

                    @if ($medicine->where_to_get)
                        <span class="font-semibold">
                            Where to get:&nbsp;
                        </span>
                        <span>{{ $medicine->getShortWTG() }}</span><br>
                    @endif

                    @if ($medicine->ingrediency)
                        <span class="font-semibold">Ingrediency:&nbsp;</span>
                        <span>{{ $medicine->getShortIngrediency() }}</span><br>
                    @endif

                    <span class="font-semibold">Use:&nbsp;</span>
                    <span>{{ $medicine->getShortUse() ?: '-' }}</span><br>

                    @if ($medicine->note)
                        <span class="font-semibold text-red-500">Note:&nbsp;</span>
                        <span class="text-red-500">{{ $medicine->getShortNote() }}</span><br>
                    @endif
                </div>
            </a>
        @empty
            <div class="text-center">No results found!</div>
        @endforelse
    </div>

</div>
