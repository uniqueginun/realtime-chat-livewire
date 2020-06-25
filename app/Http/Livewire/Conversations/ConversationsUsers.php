<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationsUsers extends Component
{

    public $users;

    public function mount(Collection $users)
    {
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.conversations.conversations-users');
    }
}
