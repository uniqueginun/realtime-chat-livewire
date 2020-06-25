@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <livewire:conversations.conversations-list :conversations="$conversations" />
            </div>
            <div class="col-md-8">
                <div class="bg-white">
                    <div class="p-4 border-bottom">
                        <livewire:conversations.conversations-users />
                    </div>
                    <div class="p-4" style="height: 300px; max-height: 300px; overflow: scroll;">
                        <livewire:conversations.conversations-messages />
                    </div>
                    <div class="p-4 border-top">
                        <livewire:conversations.conversations-reply />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
