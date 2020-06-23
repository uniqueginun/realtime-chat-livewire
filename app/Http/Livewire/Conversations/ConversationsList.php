<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationsList extends Component
{
    public $conversations;

    public function mount(Collection $conversations)
    {
        $this->conversations = $conversations;
    }

    public function render()
    {
        return view('livewire.conversations.conversations-list');
    }
}
