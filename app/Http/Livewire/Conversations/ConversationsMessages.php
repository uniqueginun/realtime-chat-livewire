<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationsMessages extends Component
{

    public $messages;

    public function mount(Collection $messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.conversations.conversations-messages');
    }
}
