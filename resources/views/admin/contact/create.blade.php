@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="h2">Contact Me</h3></div>
            <div class="card-body">
                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Type Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Type Your Email">
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="name">The Message</label>
                                <textarea class="form-control" name="body" id="message" placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input class="form-control" type="file" name="attachment" id="subject">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary m-2 p-2" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection