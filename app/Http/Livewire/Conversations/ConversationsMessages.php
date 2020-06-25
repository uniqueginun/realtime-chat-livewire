<?php

namespace App\Http\Livewire\Conversations;

use App\Message;
use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationsMessages extends Component
{

    public $messages;

    protected function getListeners()
    {
        return ['messageAdded' => 'showConversationAddedMessage'];
    }

    public function showConversationAddedMessage($id)
    {
        $this->messages->prepend(Message::find($id));
    }

    public function mount(Collection $messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.conversations.conversations-messages');
    }
}
