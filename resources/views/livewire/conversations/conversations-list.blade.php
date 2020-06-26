<div>
    @forelse($conversations as $conversation)
        <a href="{{ route('conversations.show', $conversation) }}" class="d-block bg-white mb-2 p-4">
            <div class="font-weight-bold text-muted">
                @foreach($conversation->users as $user)
                    {{ $user->present()->name }}@if(!$loop->last),@endif
                @endforeach
            </div>
            <p class="text-muted mb-0 text-truncate d-flex align-items-center">
                {{ $conversation->messages->count() ? $conversation->messages->first()->body : '' }}
            </p>
        </a>
    @empty
        <p class="text-muted">no conversations</p>
    @endforelse
</div>