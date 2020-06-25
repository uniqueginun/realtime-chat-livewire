<div>
    @forelse($messages as $message)
        @if($message->isOwn())
            <livewire:conversations.conversations-own :message="$message" :key="$message->id" />
        @else
            <livewire:conversations.conversations-message :message="$message" :key="$message->id" />
        @endif
    @empty
        <p class="text-center text-truncate text-muted">
            It's quite in here, eshshshs
        </p>
    @endforelse
</div>
