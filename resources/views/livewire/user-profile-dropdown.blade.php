<div class="relative">
    <button wire:click="toggleDropdown"
        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
        <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
    </button>

    @if($isOpen)
    <div x-show="isOpen" @click.away="closeDropdown"
        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1 rounded-md bg-white shadow-xs">
            <a href="{{ route('profile.show') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
            <button wire:click="logout"
                class="block w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-red-100">Logout</button>
        </div>
    </div>
    @endif
</div>