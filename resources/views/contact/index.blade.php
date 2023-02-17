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
                            <div class="tecket-subject"><h3 class="h2">any Subjects </h3></div>
                            <div>
                                <p class="tecket-body d-block p-4">Lorem ipsum dolor sit amet consectetur adipisicing 
                                    elit. Sit illo fugiat optio, officiis nam maiores ex temporibus tempora provident 
                                    illum, hic eos eligendi. Voluptas, saepe asperiores impedit porro hic ducimus rerum!
                                    Non accusamus neque porro deleniti nam fuga praesentium fugit facere harum, maxime 
                                    reiciendis soluta necessitatibus velit impedit unde adipisci!
                                </p>
                            </div>
                            <span>user name</span>
                            <span class="p-3 m-3">user email</span>
                            <span>date</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection