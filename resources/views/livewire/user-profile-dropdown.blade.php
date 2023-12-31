    <div class="relative">
    <button wire:click="toggleDropdown"
        class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
        <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
    </button>

    @if($isOpen)
    <div x-show="isOpen" @click.away="closeDropdown"
        class="absolute right-0 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
        <div class="py-1 bg-white rounded-md shadow-xs">
            <a href="{{ route('profile.show') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
            <button wire:click="logout"
                class="block w-full px-4 py-2 text-sm text-left text-red-700 hover:bg-red-100">Logout</button>
        </div>
    </div>
    @endif
</div>
