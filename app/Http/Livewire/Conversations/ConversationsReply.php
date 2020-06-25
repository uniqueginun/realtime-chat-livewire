<?php

namespace App\Http\Livewire\Conversations;

use App\Conversation;
use Livewire\Component;

class ConversationsReply extends Component
{
    public $conversation;

    public $body = '';

    public function mount(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }

    public function reply()
    {
        $this->validate([
            'body' => 'required'
        ]);

        $message = $this->conversation->messages()->create([
            'user_id' => auth()->id(),
            'body' => $this->body
        ]);

        $this->emit('messageAdded', $message->id);

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.conversations.conversations-reply');
    }
}
