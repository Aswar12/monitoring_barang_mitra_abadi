
<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfileDropdown extends Component
{
    public $isOpen = false;

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeDropdown()
    {
        $this->isOpen = false;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.user-profile-dropdown');
    }
}
