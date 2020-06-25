<div>
    @forelse($messages as $message)
        <div>
            {{ $message->body }} {{ $message->user->present()->name }}
        </div>
    @empty
        <p class="text-center text-truncate text-muted">
            It's quite in here, eshshshs
        </p>
    @endforelse
</div>
