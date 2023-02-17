@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <h5 class="card-header">{{"Add Image To project"}} </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <form
                                action="{{ route('image.store')}}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Add Image</span>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <button class="btn btn-primary cat-btn" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection