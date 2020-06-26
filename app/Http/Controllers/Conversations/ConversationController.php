<?php

namespace App\Http\Controllers\Conversations;

use App\Conversation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $conversations = $request->user()->conversations()->orderByDesc('last_message_at')->get();

        return view('conversations.index', compact('conversations'));
    }

    public function show(Conversation $conversation, Request $request)
    {
        $conversations = $request->user()->conversations()->orderByDesc('last_message_at')->get();

        return view('conversations.show', compact('conversations', 'conversation'));
    }
}
