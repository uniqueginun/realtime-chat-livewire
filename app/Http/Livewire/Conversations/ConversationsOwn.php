<?php

namespace App\Http\Livewire\Conversations;

use App\Message;
use Livewire\Component;

class ConversationsOwn extends Component
{

    public $message;

    public function mount(Message $message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.conversations.conversations-own');
    }
}
