<div>
    <div class="d-flex justify-content-between align-items-center">
        <div class="font-weight-bold text-muted">
            @foreach($users as $user)
                {{ $user->present()->name }}@if(!$loop->last),@endif
            @endforeach
        </div>
        <div>
            <a class="text-decoration-none text-truncate" href="#">Add someone</a>
        </div>
    </div>
</div>
