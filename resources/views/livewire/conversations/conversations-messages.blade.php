<div>
    @forelse($messages as $message)
        @if($message->isOwn())
            <livewire:conversations.conversations-own :message="$message" />
        @else
            <livewire:conversations.conversations-message :message="$message" />
        @endif
    @empty
        <p class="text-center text-truncate text-muted">
            It's quite in here, eshshshs
        </p>
    @endforelse
</div>
