@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <h5 class="card-header">Create New Caregory</h5>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <form
                                    action=" @if (!isset($cat)) {{ route('category.store')  }}@else {{ route('category.update', $cat->id) }} @endif"
                                    method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Category
                                            Name</span>
                                        <input type="text" name="name" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                            value="{{ isset($cat) ? $cat->name : '' }}">
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
