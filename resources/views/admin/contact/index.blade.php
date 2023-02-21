@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <h1>Tickets</h1>
                    <a class="btn btn-success" href="{{ route('contact.create') }}">contact me</a>
                </div>
                <div class="card-body">
                    @foreach ($tickets as $ticket)
                        <div class="tickets">
                            <div class="tecket-subject"><h3 class="h2 text-center">{{ $ticket->subject }}</h3></div>
                            <div class="d-flex justify-between">
                                <p class="tecket-body d-block p-4">{{ $ticket->Content }}</p>
                                @if( isset($ticket->attachment) ) <img class="w-25" src="{{ asset('storage/contact/' . $ticket->attachment)}}"> @endif
                            </div>
                            <span>{{ $ticket->name }}</span>
                            <span class="p-3 m-3">{{ $ticket->email }}</span>
                            <span>{{ $ticket->created_at->diffForHumans() }}</span>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection