<div>
    @forelse($conversations as $conversation)
        <a href="#" class="d-block bg-white mb-2 p-4">
            <div class="font-weight-bold text-muted">
                Alex, Belly, Me
            </div>
            <p class="text-muted mb-0 text-truncate d-flex align-items-center">
                this is the last message body
            </p>
        </a>
    @empty
        <p class="text-muted">no conversations</p>
    @endforelse
</div>