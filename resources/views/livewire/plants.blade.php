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

        <div class="relative">
            <livewire:search />

            @if ($search)
                <div class="absolute top-0 right-0 w-full p-2 overflow-y-scroll bg-white rounded shadow"
                    style="height: auto;overflow-y:scroll;max-height:300px">
                    Searching {{ $search }}

                    @forelse ($this->searchData as $item)
                        <a href="/plant/{{ $item->token }}">
                            <div class="flex items-center py-2">
                                <div class="mx-2 shadow">
                                    <img src="{{ asset('storage/' . $item->plant_img) }}" alt="{{ $item->local_name }}"
                                        height="50px" width="50px">
                                </div>

                                <div class="w-full text-center">
                                    <h2>{{ $item->getShortLName() }}</h2>
                                </div>
                            </div>
                        </a>
                    @empty
                        <h2>No items found!</h2>
                    @endforelse
                </div>
            @endif
        </div>
    </div>

    <div class="flex flex-wrap justify-center w-full gap-4 px-2 py-3">
        @forelse ($this->plants as $plant)
            <a href="/plant/{{ $plant->token }}"
                class="items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700">
                <img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg"
                    src="{{ asset('storage/' . $plant->plant_img) }}" alt="{{ $plant->scientific_name }}"
                    style="height: 250px;width:350px">
                <div class="px-2 py-4 leading-normal">
                    <span class="py-1 font-semibold">
                        @if ($this->lang == 'mar')
                            वैज्ञानिक नाव
                        @elseif ($this->lang == 'hin')
                            वैज्ञानिक नाम
                        @else
                            Scientific Name
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->scientific_name ?: '-' }}</span><br>

                    <span class="font-semibold">
                        @if ($this->lang == 'mar')
                            स्थानिक नाव
                        @elseif ($this->lang == 'hin')
                            स्थानीय नाम
                        @else
                            Local Name
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->getShortLocalName() ?: '-' }}</span><br>

                    <span class="font-semibold">
                        @if ($this->lang == 'mar')
                            जड
                        @elseif ($this->lang == 'hin')
                            जड़
                        @else
                            Root
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->getShortRoot() ?: '-' }}</span><br>

                    <span class="font-semibold">
                        @if ($this->lang == 'mar')
                            पाने
                        @elseif ($this->lang == 'hin')
                            पत्तियाँ
                        @else
                            Leaves
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->getShortLeaves() ?: '-' }}</span><br>

                    <span class="font-semibold">
                        @if ($this->lang == 'mar')
                            फूल
                        @elseif ($this->lang == 'hin')
                            फूल
                        @else
                            Flowers
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->getShortFlower() ?: '-' }}</span><br>

                    <span class="font-semibold">
                        @if ($this->lang == 'mar')
                            वापर
                        @elseif ($this->lang == 'hin')
                            उपयोग
                        @else
                            Use
                        @endif:&nbsp;
                    </span>
                    <span>{{ $plant->getShortUses() }}</span><br>
                </div>
            </a>
        @empty
            <div class="text-center">No results found!</div>
        @endforelse
    </div>
</div>
