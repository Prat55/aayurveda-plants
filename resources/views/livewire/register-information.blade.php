<div class="px-2 mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="w-full">
        @include('frontend.message')
    </div>

    <form class="space-y-6" method="POST" wire:submit.prevent="registerInformation">
        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
                <input id="name" name="name" type="text"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    wire:model="name">

                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    wire:model="email">

                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
            </div>
            <div class="mt-2">
                <input id="phone" name="phone" type="number"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    wire:model="phone" maxlength="10" minlength="10">
                @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit"
                class="box-border flex items-center justify-center w-full px-3 py-3 text-sm font-semibold leading-6 text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Register
                <div wire:loading style="width:50px;height:100%">
                    <img src="{{ asset('loading/loading2.gif') }}" alt="loader" class="object-cover">
                </div>
            </button>
        </div>
    </form>
</div>
