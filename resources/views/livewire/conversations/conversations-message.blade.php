<div class="d-flex mb-2">
    <div>
        <img class="rounded-circle mr-2" style="width: 45px" src="{{ $message->user->present()->avatar }}" alt="{{ $message->user->name }}" />
    </div>
    <div>
        <div class="bg-light p-2 rounded">
            {{ $message->body }}
        </div>
        <span class="text-muted" style="font-size: 12px;">
            {{ $message->user->present()->name }}
        </span>
    </div>
</div>
